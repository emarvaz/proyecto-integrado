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
    public function index(UserRepository $userRepository, Request $request): Response
    {
        $roleCounts = $userRepository->getUserCountByRole();

        $chartLabels = array_keys($roleCounts);
        $chartDataValues = array_values($roleCounts);

        $chartBackgroundColors = [
            'rgba(255, 99, 132, 0.7)',
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)',
            'rgba(75, 192, 192, 0.7)',
            'rgba(153, 102, 255, 0.7)',
            'rgba(255, 159, 64, 0.7)',
            'rgba(199, 199, 199, 0.7)',
            'rgba(83, 102, 255, 0.7)',
            'rgba(100, 255, 100, 0.7)',
        ];
        $chartBorderColors = str_replace('0.7', '1', $chartBackgroundColors);


        $chartData = [
            'labels' => $chartLabels,
            'datasets' => [
                [
                    'label' => 'Usuarios por rol',
                    'data' => $chartDataValues,
                    'backgroundColor' => array_slice($chartBackgroundColors, 0, count($chartLabels)),
                    'borderColor' => array_slice($chartBorderColors, 0, count($chartLabels)),
                    'borderWidth' => 1
                ]
            ]
        ];

        return $this->render('administration/index.html.twig', [
            'chartData' => $chartData,
        ]);
    }
}
