<?php

namespace OS\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OSGestionBundle:Default:index.html.twig');
    }
}
