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
    public function userEdit(int                    $id, Request $request, UserRepository $userRepository,
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
    public function userList(Request $request, userRepository $userRepository, PaginatorInterface $paginator): Response
    {
        $filters = [
            'username' => $request->query->get('filter_username'),
            'email' => $request->query->get('filter_email'),
            'name' => $request->query->get('filter_name'),
        ];

        $activeFilters = array_filter($filters, fn($value) => $value !== null && $value !== '');

        $queryBuilder = $userRepository->getUsersQueryBuilder($activeFilters);

        $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            10,
            [
               'defaultSortFieldName' => 'user.username',
               'defaultSortDirection' => 'asc',
            ]
        );

        return $this->render('administration/user/list.html.twig', [
            'pagination' => $pagination,
            'activeFilters' => $activeFilters,
        ]);
    }
}
