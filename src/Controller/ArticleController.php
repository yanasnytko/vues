<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/{number}', name: 'app_article')]
    public function index($number): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
            'number' => $number,
        ]);
    }
}
