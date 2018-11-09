<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CssFlexController extends AbstractController
{
    /**
     * @Route("/css/flex", name="css_flex")
     */
    public function index()
    {
        return $this->render('css_flex/index.html.twig', [
            'controller_name' => 'CssFlexController',
        ]);
    }
}
