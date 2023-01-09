<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product/{product_id}', name: 'app_product')]
    public function index(): Response
    {
        $data = [
            'controller_name' => 'ProductController',
            'services' => [
                [ 'name' => 'Установка ПО и ОС', 'price' => '100'],
                [ 'name' => 'Расширенная гарантия', 'price' => '120'],
                [ 'name' => 'Обклейка защитной пленкой', 'price' => '150'],
                [ 'name' => 'Гравировка клавиатуры', 'price' => '100'],
                [ 'name' => 'Установка пленки на экран', 'price' => '50'],
                [ 'name' => 'Нанесение рисунка на корпус', 'price' => '25']                
            ]
        ];
        
        return $this->render('user/product/main.html.twig', $data);
    }
}
