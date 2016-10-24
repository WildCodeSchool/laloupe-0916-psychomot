<?php

namespace PsychomotBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
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
            ->add('txtDef', 'textarea', array('attr' => array('rows' => '15')))
            ->add('titleWho')
            ->add('txtWho', 'textarea', array('attr' => array('rows' => '15')))
            ->add('titleWhy')
            ->add('txtWhy', 'textarea', array('attr' => array('rows' => '15')))
            ->add('titlePsy')
            ->add('txtPsy1', 'textarea', array('attr' => array('rows' => '10')))
            ->add('txtPsy2', 'textarea', array('attr' => array('rows' => '10')))
            ->add('titleConsult')
            ->add('txtConsult', 'textarea', array('attr' => array('rows' => '10')))
            ->add('titleInterv')
            ->add('txtInterv', 'textarea', array('attr' => array('rows' => '10')))
            ->add('titleBilan')
            ->add('txtBilan', TextareaType::class, array('attr' => array('rows' => '10')))
            ->add('namePsy1')
            ->add('namePsy2')
            ->add('contactAdress')
            ->add('contactMail')
            ->add('contactTel')
            ->add('contactName')
            ->add('file', 'file', array('label' => 'Inserer une image', 'required' => false));
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
