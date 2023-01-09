<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainPageController extends AbstractController
{
    #[Route('/main', name: 'app_main_page')]
    public function index(): Response
    {
        return $this->render('user/main/main.html.twig', [
            'controller_name' => 'MainPageController',
        ]);
    }
}
