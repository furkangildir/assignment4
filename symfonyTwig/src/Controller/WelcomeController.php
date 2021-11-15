<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/welcome/{text}", name="welcome")
     */
    public function index($text):Response
    {
        
        return $this->render('welcome/welcome.html.twig', [
            'text' => $text,
        ]);
    }
}
