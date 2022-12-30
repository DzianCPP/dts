<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController
{
    #[Route('/hello', name: 'hello_index', methods: ["GET"])]
    public function index(): Response
    {
        $response = new Response('<html><body>HELLO!</body></html>');

        return $response;
    }
}