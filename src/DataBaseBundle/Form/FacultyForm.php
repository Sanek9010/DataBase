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
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FacultyForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameoffaculty', TextType::class)
            ->add('codeoffaculty',TextType::class)
            ->add('submit',SubmitType::class)
        ;
    }

//    public function configureOptions(OptionsResolver $resolver)
//    {
//        $resolver->setDefaults(array(
//            'data_class' => Faculty::class,
//        ));
//    }
}