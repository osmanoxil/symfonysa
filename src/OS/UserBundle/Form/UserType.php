<?php

namespace OS\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('level')
            ->add('cash')
            ->add('bankcash')
            ->add('adminlevel')
            ->add('army')
            ->add('cIA')
            ->add('lRAID')
            ->add('cLRAID')
            ->add('rAID')
            ->add('lGROVE')
            ->add('cLGROVE')
            ->add('gROVE')
            ->add('lBALLAS')
            ->add('cLBALLAS')
            ->add('bALLAS')
            ->add('regularPlayer')
            ->add('vip')
            ->add('plevel')
            ->add('tlevel')
            ->add('vlevel')
            ->add('actif')
            ->add('solde')
            ->add('vote')
            ->add('voteTime')
            ->add('voteTimeRpg')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OS\UserBundle\Entity\User'
        ));
    }
}
