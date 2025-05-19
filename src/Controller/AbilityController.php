<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AbilityController extends AbstractController
{
    #[Route('/ability', name: 'app_ability')]
    public function index(): Response
    {
        return $this->render('ability/index.html.twig', [
            'controller_name' => 'AbilityController',
        ]);
    }
}
