<?php

namespace App\Controller;

use App\Entity\Card;
use App\Form\CardForm;
use App\Repository\CardRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CardController extends AbstractController
{
    #[Route('/card', name: 'app_card')]
    public function index(): Response
    {
        return $this->render('card/index.html.twig', [
            'controller_name' => 'CardController',
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
            'name' => $request->query->get('filter_name'),
            'description' => $request->query->get('filter_description'),
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
            $entityManagerInterface->persist($card);
            $entityManagerInterface->flush();

            return $this->redirectToRoute('administration_card_list');
        }

        return $this->render('administration/card/form.html.twig', ['form' => $form->createView()]);
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

        return $this->render('administration/card/form.html.twig', ['form' => $form->createView()]);
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
