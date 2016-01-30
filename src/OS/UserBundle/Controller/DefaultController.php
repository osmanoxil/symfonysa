<?php

namespace OS\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OSUserBundle:Default:index.html.twig');
    }
    public function languageAction($language)
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $user = $this->getUser();
            $user->setLocale($language);
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirect($this->getRequest()->headers->get('referer'));
        }

    }
}
