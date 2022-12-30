<?php

// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
    #[Route('/blog/{postName}', name: 'blog_showPost', methods: ["GET"])]
    public function showPost(string $postName): Response
    {
        $response = new Response('<html><body>' . $postName . '</body></html>');

        return $response;
    }
}