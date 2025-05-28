<?php

namespace App\Controller;

use App\Entity\AbilityCategory;
use App\Form\AbilityCategoryForm;
use App\Repository\AbilityCategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\Paginator;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AbilityCategoryController extends AbstractController
{
    #[Route('/ability/category', name: 'app_ability_category')]
    public function index(): Response
    {
        return $this->render('ability_category/create.html.twig', [
            'controller_name' => 'AbilityCategoryController',
        ]);
    }

    #[Route('/administration/ability-category/list', name: 'administration_ability_category_list')]
    public function abilityCategoryList(AbilityCategoryRepository $abilityCategoryRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $filters = [
            'filter' => $request->query->get('filter'),
        ];

        $activeFilters = array_filter($filters, fn($value) => $value !== null && $value !== '');

        $queryBuilder = $abilityCategoryRepository->getAbilityCategoriesQueryBuilder($activeFilters);

        $pagination = $paginator->paginate($queryBuilder, $request->query->getInt('page', 1), 10, [
            'defaultSortFieldName' => 'abilityCategory.name',
            'defaultSortDirection' => 'asc',
        ]);


        return $this->render('administration/ability-category/list.html.twig', [
            'pagination' => $pagination,
            'activeFilters' => $activeFilters,
        ]);
    }

    #[Route('/administration/ability-category/create', name: 'administration_ability_category_create')]
    public function abilityCategoryCreate(Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        $abilityCategory = new AbilityCategory();

        $form = $this->createForm(AbilityCategoryForm::class, $abilityCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManagerInterface->persist($abilityCategory);
            $entityManagerInterface->flush();

            return $this->redirectToRoute('administration_ability_category_list');
        }

        return $this->render('administration/ability-category/create.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/administration/ability-category/edit/{id}', name: 'administration_ability_category_edit')]
    public function abilityCategoryEdit(int $id, Request $request, AbilityCategoryRepository $abilityCategoryRepository,
                                        EntityManagerInterface $entityManagerInterface): Response
    {
        $abilityCategory = $abilityCategoryRepository->find($id);

        $form = $this->createForm(AbilityCategoryForm::class, $abilityCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManagerInterface->flush();

            return $this->redirectToRoute('administration_ability_category_list');
        }

        return $this->render('administration/ability-category/edit.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/administration/ability-category/delete/{id}', name: 'administration_ability_category_delete')]
    public function abilityCategoryDelete(int $id, Request $request, AbilityCategoryRepository $abilityCategoryRepository, EntityManagerInterface $entityManagerInterface): Response
    {
        $abilityCategory = $abilityCategoryRepository->find($id);

        $entityManagerInterface->remove($abilityCategory);
        $entityManagerInterface->flush();

        return $this->redirectToRoute('administration_ability_category_list');
    }
}
