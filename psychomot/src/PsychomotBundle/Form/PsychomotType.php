<?php

namespace PsychomotBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class PsychomotType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tel')
            ->add('titleDef')
            ->add('txtDef')
            ->add('titleWho')
            ->add('txtWho')
            ->add('titleWhy')
            ->add('txtWhy')
            ->add('titlePsy')
            ->add('txtPsy1')
            ->add('txtPsy2')
            ->add('titleConsult')
            ->add('txtConsult')
            ->add('titleInterv')
            ->add('txtInterv')
            ->add('titleBilan')
            ->add('txtBilan')
            ->add('namePsy1')
            ->add('namePsy2')
            ->add('contactAdress')
            ->add('contactMail')
            ->add('contactTel')
            ->add('contactName')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PsychomotBundle\Entity\Psychomot'
        ));
    }
}
