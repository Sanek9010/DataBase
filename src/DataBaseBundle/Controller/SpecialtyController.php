<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 20.12.2017
 * Time: 23:05
 */

namespace DataBaseBundle\Controller;

use DataBaseBundle\Entity\Faculty;
use DataBaseBundle\Entity\Specialty;
use DataBaseBundle\Form\SpecialtyForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class SpecialtyController extends Controller
{

    public function choiceAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form4 = $this->createFormBuilder()
            ->add('nameofspecialty', EntityType::class, array(
                'class' => 'DataBaseBundle\Entity\Specialty',
                'choice_label' => 'nameofspecialty'
            ))
            ->getForm();

        $specialty=new Specialty();
        $form3 = $this->createForm(SpecialtyForm::class, $specialty);

        $form3->handleRequest($request);
        if ($form3->isSubmitted() && $form3->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)

            $repository = $this->getDoctrine()->getRepository(Faculty::class);
            $facultyDB = $repository->findOneBy(['nameofspecialty' => $specialty->getNameofspecialty()]);


            if ($facultyDB) {
                throw $this->createNotFoundException(
                    'Факультет уже создан: '.$specialty->getNameofspecialty()
                );
            }
            else {
                // 4) save the User!

                $em->persist($specialty);
                $em->flush();
            }
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

        }

        return $this->render('@DataBase/atom/specialty.html.twig',array(
            'form' => $form3->createView(), 'form2' => $form4->createView()
        ));
    }
}
