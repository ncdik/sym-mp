<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShellController extends AbstractController
{
    /**
     * @Route("/shell/ls", name="shell_ls")
     */
    public function index()
    {
        $result = shell_exec('ls -l ../');
        return $this->render('shell/index.html.twig', [
            'result' => $result,
        ]);
    }
}
