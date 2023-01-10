<?php

namespace App\Controller;

use src\helpers\DataToRenderFormer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeliveryController extends AbstractController
{
    #[Route('/delivery', name: 'app_delivery')]
    public function index(): Response
    {
        $data = [
            'controller_name' => self::class
        ];

        $data = DataToRenderFormer::addDeliveryBodyText($data);
        $data = DataToRenderFormer::addCategories($data);
        $data = DataToRenderFormer::addProducers($data);
        $data = DataToRenderFormer::addFooters($data);
        $data = DataToRenderFormer::addPromoProduct($data);
        
        return $this->render('user/delivery/main.html.twig', $data);
    }
}
