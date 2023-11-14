<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $tableau = [
            'Make sure your cat is sitting purrrfectly still',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?',
        ];
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'tableau' => $tableau,
        ]);
    }

    #[Route('/nb_alea', name: 'nb_alea')]
    public function nb_alea(): Response
    {
        $tableau = array();

        for ($i = 0; $i < 10; $i++) {
            $tableau[] = rand(1, 100);
        }
        return $this->render('home/nb_alea.html.twig', [
            'controller_name' => 'Un tableau de nombre aléatoires',
            'tableau' => $tableau,
        ]);
    }

    #[Route('/first_string', name: 'first_string')]
    public function first_string(): Response
    {
        $tableau = [
            'make sure your cat is sitting purrrfectly still',
            'honestly, I like furry shoes better than MY cat',
            'maybe... try saying the spell backwards?',
        ];
        return $this->render('home/first_string.html.twig', [
            'controller_name' => 'First String',
            'tableau' => $tableau,
        ]);
    }

    #[Route('/dateDay', name: 'dateDay')]
    public function dateDay(): Response
    {
        $today = new DateTime();
        $specificDate = date('2023-11-14');

        // Rendre la vue avec la date
        return $this->render('home/date_day.html.twig', [
            'controller_name' => 'dateDay',
            'today' => $today,
            'specificDate' => $specificDate,
        ]);
    }
}
