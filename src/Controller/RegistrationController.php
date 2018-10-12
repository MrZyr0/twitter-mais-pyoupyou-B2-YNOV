<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/registration", name="registration")
     */
    public function index()
    {
        return $this->render('user/registration.html.twig', [
            'controller_name' => 'RegistrationController',
        ]);
    }
}