<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RedirectionController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function GoToIndex()
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'RedirectionController',
        ]);
    }



}
