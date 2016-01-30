<?php
/**
 * Copyright (c)2016 - Osmanoxil
 */

/**
 * Created by PhpStorm.
 * User: Oussama  Yousfi
 * Date: 25/01/2016
 * Time: 23:06
 */


namespace OS\SarpgBundle\classement;

    class OSClassement
    {
        public function getClassement()
        {
            $em = $this->getDoctrine()->getManager();
            $qlevel = $em->createQuery('SELECT a FROM OSUserBundle:User a ORDER BY a.level DESC')->setMaxResults(10);
            $TopTen = $qlevel->getResult();
            return $this->render('::base.html.twig', array(
                'top' => $TopTen,
            ));
        }
    }