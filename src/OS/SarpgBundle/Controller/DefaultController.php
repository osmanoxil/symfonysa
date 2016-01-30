<?php

namespace OS\SarpgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        //$request->setLocale('en');
            //$request->setDefaultLocale('en');
       // $request->setLocale('fr');
        //$request->setDefaultLocale('en');

        /*$sess = new Session();
        var_dump($sess);

        $request->setLocale('en');
        $sess->set('_locale','en');
    */

        $language = $request->getLocale();

        //$language = $this->container->getParameter('locale');
        if($language == 'fr')
        {
            $news = $this->getDoctrine()->getManager()->getRepository('OSSarpgBundle:News_fr')->findAll();
            return $this->render('OSSarpgBundle:Default:index.html.twig', array(
                'news' => $news,
            ));
        }
        elseif($language == 'en')
        {
            $news = $this->getDoctrine()->getManager()->getRepository('OSSarpgBundle:News_en')->findAll();
            return $this->render('OSSarpgBundle:Default:index.html.twig', array(
                'news' => $news,
            ));
        }
        elseif($language == 'ar')
        {
            $news = $this->getDoctrine()->getManager()->getRepository('OSSarpgBundle:News_en')->findAll();
            return $this->render('OSSarpgBundle:Default:index.html.twig', array(
                'news' => $news,
            ));
        }
        elseif($language == 'es')
        {
            $news = $this->getDoctrine()->getManager()->getRepository('OSSarpgBundle:News_en')->findAll();
            return $this->render('OSSarpgBundle:Default:index.html.twig', array(
                'news' => $news,
            ));
        }

    }
    public function changelanguageAction($langue)
    {
        if($langue != null)
        {
            //$this->container->get('request')->setLocale($langue);
             $this->get('session')->set('_locale', $langue);
            return new Response("changement de langue en ".$langue);
        }
        else
        {
             $this->redirect($this->generateUrl('os_sarpg_homepage'));
        }
    }
    public function faqAction()
    {
        return $this->render('OSSarpgBundle:Default:faq.html.twig');
    }
    public function faqMetierAction()
    {
        return $this->render('OSSarpgBundle:Default:faq.metier.html.twig');
    }
    public function faqStatutAction()
    {
        return $this->render('OSSarpgBundle:Default:faq.statut.html.twig');
    }
    public function faqRgAction()
    {
        return $this->render('OSSarpgBundle:Default:faq.rg.html.twig');
    }
    public function adminAction($_locale)
    {

        $locale = $request->getLocale();

      /* $language = $request->getLocale();
        $request->setLocale('en');
        $language2 = $request->getLocale();
        var_dump($language);
        return $this->render('OSSarpgBundle:Default:admin.html.twig',array(
            'languages' => $language
        ));
        return new Response($language.' '.$language2);*/
        return new Response($_locale);
    }
    public function frenchAction(GetResponseEvent $event)
    {
        $request = $event->getRequest();

        // some logic to determine the $locale
        $request->getSession()->set('_locale', 'fr_FR');
    }
 /*   public function englishAction(Request $request)
    {
        $this->get('session')->set('_locale', 'en_US');

        return $this->redirect($request->headers->get('referer'));
    }*/
    public function englishAction(GetResponseEvent $event)
    {
        $request = $event->getRequest();

        // some logic to determine the $locale
        $request->getSession()->set('_locale', 'en_US');
    }
    public function anglaisAction(Request $request)
    {
        $session = new Session();
        $request->setLocale('en');
        $session->set('_locale','en');
        $lo = $session->get('_locale');
        $lo2 = $request->getLocale();
        var_dump($lo);
        var_dump($lo2);
return new Response('');
        //$session->setLocale('en');
    }
    public function languageAction($language,Request $request)
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $user = $this->getUser();
            $user->setLocale($language);
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirect($request->getBaseUrl().'/'.$language);
        }

    }
}
