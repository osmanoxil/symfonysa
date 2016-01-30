<?php
/**
 * Copyright (c)2016 - Osmanoxil
 */

namespace OS\SarpgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class JoueurVoirController extends Controller
{
    public function indexAction($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('OSUserBundle:User');
        if (isset($id)) {

            $membre = $repository->findById($id);
            return $this->render('OSSarpgBundle:JoueurVoir:index.html.twig', array(
                'membre' => $membre,
                'idCurrent' => $id
            ));
        }

    }

    public function voirmeAction(Request $request)
    {
        var_dump($request);
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $repository = $this->getDoctrine()->getManager()->getRepository('OSUserBundle:User');
            $idsession = $this->getUser()->getId();
            $membre = $repository->findById($idsession);
            return $this->render('OSSarpgBundle:JoueurVoir:index.html.twig', array(
                'membre' => $membre,
                'idCurrent' => $idsession

            ));
        } else {
            $translator = $this->get('translator');
            $ErrorProfil = $translator->trans('Pour pouvoir affichier vos statistiques veuillez vous connecter ');
            $this->get('session')->getFlashBag()->add('info', $ErrorProfil);
            return $this->redirect($this->generateUrl('os_sarpg_homepage'));
        }

    }

    public function recordAction()
    {

        $em = $this->getDoctrine()->getManager();
        $qlevel = $em->createQuery('SELECT a FROM OSUserBundle:User a ORDER BY a.level DESC')->setMaxResults(10);
        $qplevel = $em->createQuery('SELECT a FROM OSUserBundle:User a ORDER BY a.plevel DESC')->setMaxResults(10);
        $qtlevel = $em->createQuery('SELECT a FROM OSUserBundle:User a ORDER BY a.tlevel DESC')->setMaxResults(10);
        $qvlevel = $em->createQuery('SELECT a FROM OSUserBundle:User a ORDER BY a.vlevel DESC')->setMaxResults(10);
        $qactif = $em->createQuery('SELECT a FROM OSUserBundle:User a ORDER BY a.actif DESC')->setMaxResults(10);
        $qbank = $em->createQuery('SELECT a FROM OSUserBundle:User a ORDER BY a.cash DESC')->setMaxResults(10);

        $level = $qlevel->getResult();
        $plevel = $qplevel->getResult();
        $tlevel = $qtlevel->getResult();
        $vlevel = $qvlevel->getResult();
        $actif = $qactif->getResult();
        $bank = $qbank->getResult();
        return $this->render('OSSarpgBundle:JoueurVoir:record.html.twig', array(
            'level' => $level,
            'plevel' => $plevel,
            'vlevel' => $vlevel,
            'tlevel' => $tlevel,
            'actif' => $actif,
            'bank' => $bank

        ));

    }

    public function searchAction()
    {
        $request = Request::createFromGlobals();
        if ($request->getMethod() == "POST")
        {
            $search = $request->request->get('search');
            $Results = $this->getDoctrine()->getManager()->getRepository('OSUserBundle:User')->findAll();
            $searchr = array();
            foreach($Results as $r)
            {
               if(stristr($r->getUsername(),$search)!== FALSE)
                {
                   $searchr[] = $r;
                }

            }
            return $this->render('OSSarpgBundle:JoueurVoir:search.html.twig', array(
                'search' => $searchr
            ));
        }
        else
        {
            return $this->redirect($this->generateUrl('os_sarpg_homepage'));
        }


    }
    public function classementAction()
    {

        return $this->redirect($this->generateUrl("os_sarpg_classement").'page/1');
    }
    public function classementPagesAction($page)
    {
        if($page==0)
        {
            return $this->redirect($this->generateUrl("os_sarpg_classement").'page/1');
        }
        $NumberPerPage = 3 ;
        $rang = ($page-1)*($NumberPerPage);

        $em = $this->getDoctrine()->getManager();
        $qlevel = $em->createQuery('SELECT a FROM OSUserBundle:User a ORDER BY a.level DESC') ->setFirstResult(($page-1) * $NumberPerPage)
            ->setMaxResults($NumberPerPage);
        $level = $qlevel->getResult();

        return $this->render('OSSarpgBundle:JoueurVoir:classement.html.twig',array(
            'membre' => $level,
            'compteur'=> $rang,
            'page' =>$page
        ));
        /*
         * ->setFirstResult(($page-1) * $NumberPerPage)
        ->setMaxResults($NumberPerPage);
         */
    }
    public function classementLayoutAction()
    {
        $em = $this->getDoctrine()->getManager();
        $qlevel = $em->createQuery('SELECT a FROM OSUserBundle:User a ORDER BY a.level DESC')->setMaxResults(10);
        $level = $qlevel->getResult();
    }
}
