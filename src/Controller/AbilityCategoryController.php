<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AbilityCategoryController extends AbstractController
{
    #[Route('/ability/category', name: 'app_ability_category')]
    public function index(): Response
    {
        return $this->render('ability_category/index.html.twig', [
            'controller_name' => 'AbilityCategoryController',
        ]);
    }
}
