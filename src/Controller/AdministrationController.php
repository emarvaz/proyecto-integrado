<?php

namespace App\Controller;

use App\Entity\Ability;
use App\Entity\AbilityCategory;
use App\Entity\Card;
use App\Entity\User;
use App\Form\AbilityCategoryForm;
use App\Form\AbilityForm;
use App\Form\CardForm;
use App\Form\UserType;
use App\Repository\AbilityCategoryRepository;
use App\Repository\AbilityRepository;
use App\Repository\CardRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AdministrationController extends AbstractController
{
    #[Route('/administration', name: 'administration')]
    public function index(): Response
    {
        return $this->render('administration/index.html.twig');
    }

    #[Route('/administration/user/create', name: 'administration_user_create')]
    public function userCreate(Request $request, EntityManagerInterface $entityManagerInterface): Response
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(password_hash($user->getPassword(), PASSWORD_BCRYPT));

            $entityManagerInterface->persist($user);
            $entityManagerInterface->flush();

            return $this->redirectToRoute('administration_user_list');
        }

        return $this->render('administration/user/form.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/administration/user/edit/{id}', name: 'administration_user_edit')]
    public function userEdit(int $id, Request $request, UserRepository $userRepository,
                             EntityManagerInterface $entityManagerInterface): Response
    {
        $user = $userRepository->find($id);

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(password_hash($user->getPassword(), PASSWORD_BCRYPT));

            $entityManagerInterface->flush();

            return $this->redirectToRoute('administration_user_list');
        }

        return $this->render('administration/user/form.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/administration/user/delete/{id}', name: 'administration_user_delete')]
    public function userDelete(int $id, Request $request, UserRepository $userRepository,
                               EntityManagerInterface $entityManagerInterface): Response
    {
        $user = $userRepository->find($id);

        $entityManagerInterface->remove($user);
        $entityManagerInterface->flush();

        return $this->redirectToRoute('administration_user_list');
    }

    #[Route('/administration/user/list', name: 'administration_user_list')]
    public function userList(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();

        return $this->render('administration/user/list.html.twig', ['users' => $users]);
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
    public function cardDelete(int $id, Request $request, CardRepository $cardRepository,
                               EntityManagerInterface $entityManagerInterface): Response
    {
        $card = $cardRepository->find($id);

        $entityManagerInterface->remove($card);
        $entityManagerInterface->flush();

        return $this->redirectToRoute('administration_card_list');
    }

    #[Route('/administration/card/list', name: 'administration_card_list')]
    public function cardList(CardRepository $cardRepository): Response
    {
        $cards = $cardRepository->findAll();

        return $this->render('administration/card/list.html.twig', ['cards' => $cards]);
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

        return $this->render('administration/ability/form.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/administration/ability/edit/{id}', name: 'administration_ability_edit')]
    public function abilityEdit(int $id, Request $request, AbilityRepository $abilityRepository,
                                        EntityManagerInterface $entityManagerInterface): Response
    {
        $ability = $abilityRepository->find($id);

        $form = $this->createForm(AbilityForm::class, $ability);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManagerInterface->flush();

            return $this->redirectToRoute('administration_ability_list');
        }

        return $this->render('administration/ability/form.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/administration/ability/delete/{id}', name: 'administration_ability_delete')]
    public function abilityDelete(int $id, Request $request,
                                          AbilityRepository $abilityRepository,
                                          EntityManagerInterface $entityManagerInterface): Response
    {
        $ability = $abilityRepository->find($id);

        $entityManagerInterface->remove($ability);
        $entityManagerInterface->flush();

        return $this->redirectToRoute('administration_ability_list');
    }

    #[Route('/administration/ability/list', name: 'administration_ability_list')]
    public function abilityList(AbilityRepository $abilityRepository): Response
    {
        $abilities = $abilityRepository->findAll();

        return $this->render('administration/ability/list.html.twig', ['abilities' => $abilities]);
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

        return $this->render('administration/ability-category/form.html.twig', ['form' => $form->createView()]);
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

        return $this->render('administration/ability-category/form.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/administration/ability-category/delete/{id}', name: 'administration_ability_category_delete')]
    public function abilityCategoryDelete(int $id, Request $request,
                                          AbilityCategoryRepository $abilityCategoryRepository,
                                          EntityManagerInterface $entityManagerInterface): Response
    {
        $abilityCategory = $abilityCategoryRepository->find($id);

        $entityManagerInterface->remove($abilityCategory);
        $entityManagerInterface->flush();

        return $this->redirectToRoute('administration_ability_category_list');
    }

    #[Route('/administration/ability-category/list', name: 'administration_ability_category_list')]
    public function abilityCategoryList(AbilityCategoryRepository $abilityCategoryRepository): Response
    {
        $abilityCategories = $abilityCategoryRepository->findAll();

        return $this->render('administration/ability-category/list.html.twig', ['abilityCategories' => $abilityCategories]);
    }
}
