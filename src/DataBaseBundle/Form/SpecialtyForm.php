<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 20.12.2017
 * Time: 22:38
 */

namespace DataBaseBundle\Form;

use DataBaseBundle\Entity\Faculty;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SpecialtyForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameofspecialty', TextType::class)
            ->add('codeofspecialty',TextType::class)
        ;
    }

//    public function configureOptions(OptionsResolver $resolver)
//    {
//        $resolver->setDefaults(array(
//            'data_class' => Faculty::class,
//        ));
//    }
}