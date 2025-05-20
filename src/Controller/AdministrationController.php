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
}
