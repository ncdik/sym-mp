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
        for ($i=0;$i<15;$i++) {
            $r = dechex(rand(0x90, 0xee));
            $g = dechex(rand(0x90, 0xee));
            $b = dechex(rand(0x90, 0xee));
            if(strlen($r)<2) $r = '0'.$r;
            if(strlen($g)<2) $g = '0'.$g;
            if(strlen($b)<2) $b = '0'.$b;
            $colors[] = '#'.$r.$g.$b;
        }
        return $this->render('css_flex/index.html.twig', [
            'colors' => $colors,
        ]);
    }
}
