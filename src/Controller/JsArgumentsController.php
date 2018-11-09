<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JsArgumentsController extends AbstractController
{
    /**
     * @Route("/js/arguments", name="js_arguments")
     */
    public function index()
    {
        return $this->render('js_arguments/index.html.twig', [
            'controller_name' => 'JsArgumentsController',
        ]);
    }
}
