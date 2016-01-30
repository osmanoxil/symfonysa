<?php
/**
 * Copyright (c)2016 - Osmanoxil
 */

namespace OS\SarpgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OS\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;


class StoreController extends Controller
{
    public function redirectError()
    {
        if (!$this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $translator = $this->get('translator');
            $ErrorStore = $translator->trans('Veuillez vous connecter avant d\'acceder a la boutique');
            $this->get('session')->getFlashBag()->add('error',$ErrorStore);
            return $this->redirect($this->generateUrl('os_sarpg_homepage'));
        }
    }
    public function paypalAction()
    {
        if (!$this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $translator = $this->get('translator');
            $ErrorStore = $translator->trans('Veuillez vous connecter avant d\'acceder a la boutique');
            $this->get('session')->getFlashBag()->add('error',$ErrorStore);
            return $this->redirect($this->generateUrl('os_sarpg_homepage'));
        }
        return $this->render('OSSarpgBundle:store:paypal.html.twig');

    }
    public function indexAction()
    {
        if (!$this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $translator = $this->get('translator');
            $ErrorStore = $translator->trans('Veuillez vous connecter avant d\'acceder a la boutique');
            $this->get('session')->getFlashBag()->add('error',$ErrorStore);
            return $this->redirect($this->generateUrl('os_sarpg_homepage'));
        }
        return $this->render('OSSarpgBundle:store:store.html.twig');
    }
    public function renameAction(Request $request)
    {
        if (!$this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $translator = $this->get('translator');
            $ErrorStore = $translator->trans('Veuillez vous connecter avant d\'acceder a la boutique');
            $this->get('session')->getFlashBag()->add('error',$ErrorStore);
            return $this->redirect($this->generateUrl('os_sarpg_homepage'));
        }
        $repository = $this->getDoctrine()->getManager()->getRepository('OSUserBundle:User');
        $user = $this->getUser();
        $idsession = $this->getUser()->getId();
        $member = $repository->findById($idsession);
        if($user->getSolde() < $this->container->getParameter('prixrename'))
        {
            $translator = $this->get('translator');
            $ErrorRename = $translator->trans('Vous n\'avez pas assez de crédits pour pouvoir effectué un rename');
            $this->get('session')->getFlashBag()->add('error',$ErrorRename);
            return $this->redirect($this->generateUrl('os_sarpg_store'));
        }
        $member = $this->getUser();
        $pseudo = $member->getUsername();
        $translator = $this->get('translator');
        $valider = $translator->trans('Valider le changement de pseudo');
        $holder = $translator->trans('Votre nouveau pseudo');

        $form = $this->createFormBuilder($member)
            ->add('username', TextType::class,array(
                'attr' => array('placeholder' => $holder)
            ))
            ->add('submit', SubmitType::class,array(
                'label' => $valider
            ))
            ->getForm();
        $form->handleRequest($request);
        if($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $edit = $form->getData();
            if ($edit->getUsername() != $pseudo){
                $member->setSolde($member->getSolde() - $this->container->getParameter('prixrename'));

            $em->persist($edit);
            $em->flush();
            $RenameUser = $translator->trans('Félicitation vous venez de renommer votre compte');
            $this->get('session')->getFlashBag()->add('success', $RenameUser);
        }
        else {
            $RenameUser = $translator->trans('Veuillez entrer un pseudo valide');
            $this->get('session')->getFlashBag()->add('info', $RenameUser);
        }


           return $this->redirect($this->generateUrl('os_sarpg_homepage'));
        }



        return $this->render('OSSarpgBundle:store:rename.html.twig',array(
            'form' => $form->createView()
        ));
    }
    public function ciaAction(Request $request)
    {
        if (!$this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $translator = $this->get('translator');
            $ErrorStore = $translator->trans('Veuillez vous connecter avant d\'acceder a la boutique');
            $this->get('session')->getFlashBag()->add('error',$ErrorStore);
            return $this->redirect($this->generateUrl('os_sarpg_homepage'));
        }

        $member = $this->getUser();
        $translator = $this->get('translator');
        if($member->getCIA() == 1337)
        {
            $ErrorCIA = $translator->trans('Vous avez déjà le statut CIA, pourquoi vouloir le réacheter ?');
            $this->get('session')->getFlashBag()->add('info',$ErrorCIA);
            return $this->redirect($this->generateUrl('os_sarpg_store'));
        }
        if($member->getSolde() < $this->container->getParameter('prixcia'))
        {
            $ErrorCIASolde = $translator->trans('Vous n\'avez pas assez de crédit pour acheter cet avantage.');
            $this->get('session')->getFlashBag()->add('info',$ErrorCIASolde);
            return $this->redirect($this->generateUrl('os_sarpg_store'));
        }

        $valider = $translator->trans('Valider l\'achat du CIA');
        $form = $this->createFormBuilder($member)
            ->add('submit', SubmitType::class,array(
                'label' => $valider
            ))
            ->getForm();
        $form->handleRequest($request);
        $edit = $form->getData();
        if($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $member->setSolde($member->getSolde() - $this->container->getParameter('prixcia'));
            $member->setCIA(1337);
            $em->persist($edit);
            $em->flush();
            $AchatCiaUser = $translator->trans('Félicitation vous venez d\'acheter le statut cia');
            $this->get('session')->getFlashBag()->add('success', $AchatCiaUser);
        }
        return $this->render('OSSarpgBundle:store:cia.html.twig',array(
            'form' => $form->createView()
        ));
    }
    public function jrAction(Request $request)
    {
        if (!$this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $translator = $this->get('translator');
            $ErrorStore = $translator->trans('Veuillez vous connecter avant d\'acceder a la boutique');
            $this->get('session')->getFlashBag()->add('error',$ErrorStore);
            return $this->redirect($this->generateUrl('os_sarpg_homepage'));
        }
        $member = $this->getUser();
        $translator = $this->get('translator');
        if($member->getRegularPlayer() == 1337)
        {
            $ErrorJR = $translator->trans('Vous êtes dèja un joueur régulier, pourquoi vouloir le réacheter ?');
            $this->get('session')->getFlashBag()->add('info',$ErrorJR);
            return $this->redirect($this->generateUrl('os_sarpg_store'));
        }
        if($member->getSolde() < $this->container->getParameter('prixjr'))
        {
            $ErrorJRSolde = $translator->trans('Vous n\'avez pas assez de crédit pour acheter cet avantage.');
            $this->get('session')->getFlashBag()->add('info',$ErrorJRSolde);
            return $this->redirect($this->generateUrl('os_sarpg_store'));
        }

        $valider = $translator->trans('Valider l\'achat du JR');
        $form = $this->createFormBuilder($member)
            ->add('submit', SubmitType::class,array(
                'label' => $valider
            ))
            ->getForm();
        $form->handleRequest($request);
        $edit = $form->getData();
        if($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $member->setSolde($member->getSolde() - $this->container->getParameter('prixjr'));
            $member->setRegularPlayer(1337);
            $em->persist($edit);
            $em->flush();
            $AchatJRUser = $translator->trans('Félicitation vous venez d\'acheter le statut JR');
            $this->get('session')->getFlashBag()->add('success', $AchatJRUser);
        }
        return $this->render('OSSarpgBundle:store:jr.html.twig',array(
            'form' => $form->createView()
        ));
    }
    public function ptsAction(Request $request)
    {
        if (!$this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $translator = $this->get('translator');
            $ErrorStore = $translator->trans('Veuillez vous connecter avant d\'acceder a la boutique');
            $this->get('session')->getFlashBag()->add('error',$ErrorStore);
            return $this->redirect($this->generateUrl('os_sarpg_homepage'));
        }
        $translator = $this->get('translator');
        $member = $this->getUser();
        $Level = $member->getLevel();
        $valider = $translator->trans('Acheter !');
        $form = $this->createFormBuilder($member)

            ->add('level', TextType::class,array(
                'data'=>'50'
            ))
            ->add('submit', SubmitType::class,array(
                'label' => $valider
            ))
            ->getForm();
        $form->handleRequest($request);
        $edit = $form->getData();
        $achat = $edit->getLevel();
        if($form->isValid()) {
            if($edit->getLevel()<$this->container->getParameter('MinPointsStore') OR $edit->getLevel()>$this->container->getParameter('MaxPointsStore'))
            {
                return $this->redirect($this->generateUrl('os_sarpg_store_pts'));
            }
            $em = $this->getDoctrine()->getManager();
            $member->setSolde($member->getSolde() - ($edit->getLevel()/$this->container->getParameter('twoptsprix')));
            $member->setLevel($Level + $edit->getLevel());
            $em->persist($edit);
            $em->flush();
            $AchatJRUser = $translator->trans('Félicitation vous venez d\'acheter ');
            $this->get('session')->getFlashBag()->add('success', $AchatJRUser.$achat.' points');
            $this->redirect($this->generateUrl('os_sarpg_store'));

        }

        return $this->render('OSSarpgBundle:store:pts.html.twig',array(
            'form' => $form->createView()
        ));
    }



}
