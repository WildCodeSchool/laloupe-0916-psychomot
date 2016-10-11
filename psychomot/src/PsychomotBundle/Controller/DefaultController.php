<?php

namespace PsychomotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PsychomotBundle:Default:index.html.twig');
    }
}
