<?php
/**
 * Copyright (c)2016 - Osmanoxil
 */

namespace OS\SarpgBundle\Controller;
use OS\SarpgBundle\Entity\vote;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class VoteController extends Controller
{
    public function rootAction(Request $request)
    {


        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $user = $this->getUser();
            $dateVote = $user->getVoteTime();
            $time = time();
            $BetweenTime = $time - $dateVote;
            $WaitTime = $this->container->getParameter('exproot');
            $em = $this->getDoctrine()->getManager();
            //traduction
            $translator = $this->get('translator');
            $LastVoteRoot = $translator->trans('Vous avez voté il y a moins de 2 heures sur root-top !');

            if ($BetweenTime < $WaitTime) {

                $this->get('session')->getFlashBag()->add('error', $LastVoteRoot );

                return $this->redirect($this->generateUrl("os_sarpg_joueur_voir_me"));
            } else {
                $request = Request::createFromGlobals();
                if ($request->getMethod() == "POST") {
                    $solde = $request->request->get('solde');
                    $score = $request->request->get('score');
                    if (isset($solde)) {
                        $user->setSolde($user->getSolde() + $this->container->getParameter('votesolde'));
                        $user->setVoteTime(time());
                        $user->setVote($user->getVote()+1);
                        $em->flush();
                    } elseif (isset($score)) {
                        $user->setLevel($user->getLevel() + $this->container->getParameter('votescore'));
                        $user->setVoteTime(time());
                        $user->setVote($user->getVote()+1);
                        $em->flush();

                    }
                    return $this->redirect($this->container->getParameter('rootlink'));
                }
                return $this->render('OSSarpgBundle:vote:root.html.twig');
            }
        }
            else{
                $translator = $this->get('translator');
                $ErrorVote = $translator->trans('Pour pouvoir voter pour le serveur veuillez vous connecter ');
                $this->get('session')->getFlashBag()->add('info',$ErrorVote);
                return $this->redirect($this->generateUrl('os_sarpg_homepage'));

            }
    }


    public function RPGAction()
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $user = $this->getUser();
            $dateVote = $user->getVoteTimeRpg();
            $time = time();
            $BetweenTime = $time - $dateVote;
            $WaitTime = $this->container->getParameter('exprpg');
            $em = $this->getDoctrine()->getManager();
            //traduction
            $translator = $this->get('translator');
            $LastVoteRoot = $translator->trans('Vous avez voté il y a moins de 3 heures sur RPG-Paradize ! ');

            if ($BetweenTime < $WaitTime) {

                $this->get('session')->getFlashBag()->add('error', $LastVoteRoot);

                return $this->redirect($this->generateUrl("os_sarpg_joueur_voir_me"));
            } else {
                $request = Request::createFromGlobals();
                if ($request->getMethod() == "POST") {
                    $solde = $request->request->get('solde');
                    $score = $request->request->get('score');
                    if (isset($solde)) {
                        $user->setSolde($user->getSolde() + $this->container->getParameter('votesolde'));
                        $user->setVoteTimeRpg(time());
                        $user->setVote($user->getVote()+1);
                        $em->flush();
                    } elseif (isset($score)) {
                        $user->setLevel($user->getLevel() + $this->container->getParameter('votescore'));
                        $user->setVote($user->getVote()+1);
                        $user->setVoteTimeRpg(time());
                        $em->flush();

                    }
                    return $this->redirect($this->container->getParameter('rootlink'));
                }
                return $this->render('OSSarpgBundle:vote:root.html.twig');
            }
        }
        else{
            $translator = $this->get('translator');
            $ErrorVote = $translator->trans('Pour pouvoir voter pour le serveur veuillez vous connecter ');
            $this->get('session')->getFlashBag()->add('info',$ErrorVote);
            return $this->redirect($this->generateUrl('os_sarpg_homepage'));

        }


    }
}
