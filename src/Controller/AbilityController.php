<?php

namespace App\Controller;

use App\Entity\Ability;
use App\Form\AbilityForm;
use App\Repository\AbilityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AbilityController extends AbstractController
{
    #[Route('/ability', name: 'app_ability')]
    public function index(): Response
    {
        return $this->render('ability/create.html.twig', [
            'controller_name' => 'AbilityController',
        ]);
    }

    #[Route('/administration/ability/list', name: 'administration_ability_list')]
    public function abilityList(AbilityRepository $abilityRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $filters = [
            'filter' => $request->query->get('filter'),
        ];

        $activeFilters = array_filter($filters, fn($value) => $value !== null && $value !== '');

        $queryBuilder = $abilityRepository->getAbilitiesQueryBuilder($activeFilters);

        $pagination = $paginator->paginate($queryBuilder, $request->query->getInt('page', 1), 10, [
            'defaultSortFieldName' => 'ability.name',
            'defaultSortDirection' => 'asc',
        ]);


        return $this->render('administration/ability/list.html.twig', [
            'pagination' => $pagination,
            'activeFilters' => $activeFilters,
        ]);
    }

    #[Route('/administration/ability/create', name: 'administration_ability_create')]
    public function abilityCreate(Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        $ability = new Ability();

        $form = $this->createForm(AbilityForm::class, $ability);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManagerInterface->persist($ability);
            $entityManagerInterface->flush();

            return $this->redirectToRoute('administration_ability_list');
        }

        return $this->render('administration/ability/create.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/administration/ability/edit/{id}', name: 'administration_ability_edit')]
    public function abilityEdit(int                    $id, Request $request, AbilityRepository $abilityRepository,
                                EntityManagerInterface $entityManagerInterface): Response
    {
        $ability = $abilityRepository->find($id);

        $form = $this->createForm(AbilityForm::class, $ability);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManagerInterface->flush();

            return $this->redirectToRoute('administration_ability_list');
        }

        return $this->render('administration/ability/edit.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/administration/ability/delete/{id}', name: 'administration_ability_delete')]
    public function abilityDelete(int                    $id, Request $request,
                                  AbilityRepository      $abilityRepository,
                                  EntityManagerInterface $entityManagerInterface): Response
    {
        $ability = $abilityRepository->find($id);

        $entityManagerInterface->remove($ability);
        $entityManagerInterface->flush();

        return $this->redirectToRoute('administration_ability_list');
    }
}
