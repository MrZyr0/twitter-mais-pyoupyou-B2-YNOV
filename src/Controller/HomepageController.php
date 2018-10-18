<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use App\Security\AccessChecker;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(AccessChecker $accessChecker)
    {

        if (canReadHomepage())
        {
            $user = $accessChecker->getUser();
            return $this->render('homepage.html.twig', [
                'title' => 'Accueil',
                'user' => $user;
            ]);
        }
        else
        {
            return $this->redirectToRoute('signin');
        }
    }

    public function getUserData(){
        
    }
}
