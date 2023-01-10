<?php

namespace App\Controller;

use src\helpers\DataToRenderFormer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactsController extends AbstractController
{
    #[Route('/contacts', name: 'app_contacts')]
    public function index(): Response
    {
        $data = [
            'controller_name' => 'ContactsController',
        ];

        $data = DataToRenderFormer::addCategories($data);
        $data = DataToRenderFormer::addPromoProduct($data);
        $data = DataToRenderFormer::addContactsBody($data);
        $data = DataToRenderFormer::addFooters($data);
        
        return $this->render('user/contacts/main.html.twig', $data);
    }
}
