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
    public function index(AbilityRepository $abilityRepository, CardRepository $cardRepository): Response
    {
        $categoryCounts = $abilityRepository->countAbilitiesByCategory();

        $chart1Labels = array_keys($categoryCounts);
        $chart1DataValues = array_values($categoryCounts);

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

        $abilitiesPerAbilityCategoryChartData = [
            'labels' => $chart1Labels,
            'datasets' => [[
                'label' => 'Número de habilidades por categoría',
                'data' => $chart1DataValues,
                'backgroundColor' => array_slice($chartBackgroundColors, 0, count($chart1Labels)),
                'borderColor' => array_slice($chartBorderColors, 0, count($chart1Labels)),
                'borderWidth' => 1
            ]]
        ];

        $abilityCounts = $cardRepository->countCardsByAbility();

        $chart2Labels = array_keys($abilityCounts);
        $chart2DataValues = array_values($abilityCounts);

        $generateColor = function ($i) {
            $hue = ($i * 37) % 360;
            return "hsl($hue, 70%, 60%)";
        };

        $backgroundColors2 = array_map($generateColor, array_keys($chart2Labels));
        $borderColors2 = array_map(fn($c) => str_replace('60%', '40%', $c), $backgroundColors2);

        $cardsPerAbilityChartData = [
            'labels' => $chart2Labels,
            'datasets' => [[
                'label' => 'Número de cartas por habilidad',
                'data' => $chart2DataValues,
                'backgroundColor' => $backgroundColors2,
                'borderColor' => $borderColors2,
                'borderWidth' => 1
            ]]
        ];

        return $this->render('administration/index.html.twig', [
            'abilitiesPerAbilityCategoryChartData' => $abilitiesPerAbilityCategoryChartData,
            'cardsPerAbilityChartData' => $cardsPerAbilityChartData,
        ]);
    }
}
