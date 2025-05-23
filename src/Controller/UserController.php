<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/administration/user/list', name: 'administration_user_list')]
    public function administrationUserList(UserRepository $userRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $filters = [
            'username' => $request->query->get('filter_username'),
            'email' => $request->query->get('filter_email'),
            'name' => $request->query->get('filter_name'),
        ];

        $activeFilters = array_filter($filters, fn($value) => $value !== null && $value !== '');

        $queryBuilder = $userRepository->getUsersQueryBuilder($activeFilters);

        $pagination = $paginator->paginate($queryBuilder, $request->query->getInt('page', 1), 10, [
            'defaultSortFieldName' => 'user.username',
            'defaultSortDirection' => 'asc',
        ]);


        return $this->render('administration/user/list.html.twig', [
            'pagination' => $pagination,
            'activeFilters' => $activeFilters,
        ]);
    }

    #[Route('/administration/user/create', name: 'administration_user_create')]
    public function administrationUserCreate(EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user, [
            'administration' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(password_hash($user->getPassword(), PASSWORD_BCRYPT));

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('administration_user_list');
        }

        return $this->render('administration/user/form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/administration/user/edit/{id}', name: 'administration_user_edit')]
    public function administrationUserEdit(int $id, UserRepository $userRepository, EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $userRepository->find($id);

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(password_hash($user->getPassword(), PASSWORD_BCRYPT));

            $entityManager->flush();

            return $this->redirectToRoute('administration_user_list');
        }

        return $this->render('administration/user/form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/administration/user/delete/{id}', name: 'administration_user_delete')]
    public function administrationUserDelete(int $id, UserRepository $userRepository, EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $userRepository->find($id);

        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('administration_user_list');
    }
}
