<?php

namespace App\Controller;

use App\Entity\Card;
use App\Form\CardForm;
use App\Repository\CardRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CardController extends AbstractController
{
    #[Route('/card/{id}', name: 'card', requirements: ['id' => '\d+'])]
    public function index(int $id, CardRepository $cardRepository): Response
    {
        $card = $cardRepository->find($id);

        return $this->render('card/index.html.twig', [
            'card' => $card,
        ]);
    }

    #[Route('/card/list', name: 'card_list')]
    public function list(CardRepository $cardRepository): Response
    {
        $cards = $cardRepository->findAll();

        return $this->render('card/list.html.twig', [
            'cards' => $cards
        ]);
    }

    #[Route('/administration/card/list', name: 'administration_card_list')]
    public function administrationCardList(CardRepository $cardRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $filters = [
            'filter' => $request->query->get('filter'),
        ];

        $activeFilters = array_filter($filters, fn($value) => $value !== null && $value !== '');

        $queryBuilder = $cardRepository->getCardsQueryBuilder($activeFilters);

        $pagination = $paginator->paginate($queryBuilder, $request->query->getInt('page', 1), 10, [
            'defaultSortFieldName' => 'card.name',
            'defaultSortDirection' => 'asc',
        ]);


        return $this->render('administration/card/list.html.twig', [
            'pagination' => $pagination,
            'activeFilters' => $activeFilters,
        ]);
    }


    #[Route('/administration/card/create', name: 'administration_card_create')]
    public function cardCreate(Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        $card = new Card();

        $form = $this->createForm(CardForm::class, $card);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageFile')->getData();

            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();

                $imageFile->move(
                    $this->getParameter('cards_images_directory'),
                    $newFilename
                );

                $card->setImage($newFilename);
            }

            $entityManagerInterface->persist($card);
            $entityManagerInterface->flush();

            return $this->redirectToRoute('administration_card_list');
        }

        return $this->render('administration/card/create.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/administration/card/edit/{id}', name: 'administration_card_edit')]
    public function cardEdit(int $id, Request $request, CardRepository $cardRepository,
                             EntityManagerInterface $entityManagerInterface): Response
    {
        $card = $cardRepository->find($id);

        $form = $this->createForm(CardForm::class, $card);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManagerInterface->flush();

            return $this->redirectToRoute('administration_card_list');
        }

        return $this->render('administration/card/edit.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/administration/card/delete/{id}', name: 'administration_card_delete')]
    public function cardDelete(int                    $id, Request $request, CardRepository $cardRepository,
                               EntityManagerInterface $entityManagerInterface): Response
    {
        $card = $cardRepository->find($id);

        $entityManagerInterface->remove($card);
        $entityManagerInterface->flush();

        return $this->redirectToRoute('administration_card_list');
    }

}
