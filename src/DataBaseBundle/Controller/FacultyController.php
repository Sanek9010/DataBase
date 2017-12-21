<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 20.12.2017
 * Time: 23:05
 */

namespace DataBaseBundle\Controller;

use DataBaseBundle\Entity\Faculty;
use DataBaseBundle\Form\FacultyForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class FacultyController extends Controller
{

    public function choiceAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form2 = $this->createFormBuilder()
            ->add('nameoffaculty', EntityType::class, array(
                'class' => 'DataBaseBundle\Entity\Faculty',

                'choice_label' => 'nameoffaculty'
            ))
            ->getForm();

        $faculty=new Faculty();
        $form = $this->createForm(FacultyForm::class, $faculty);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)

            $repository = $this->getDoctrine()->getRepository(Faculty::class);
            $facultyDB = $repository->findOneBy(['nameoffaculty' => $faculty->getNameoffaculty()]);


            if ($facultyDB) {
                throw $this->createNotFoundException(
                    'Факультет уже создан: '.$faculty->getNameoffaculty()
                );
            }
            else {
                // 4) save the User!

                $em->persist($faculty);
                $em->flush();
            }
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('create');
        }

        return $this->render('@DataBase/Main/create.html.twig',array(
            'form' => $form->createView(), 'form2' => $form2->createView()
        ));
    }
}
