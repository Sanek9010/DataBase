<?php
namespace DataBaseBundle\Controller;

use DataBaseBundle\Form\UserType;
use DataBaseBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);


            $repository = $this->getDoctrine()->getRepository(User::class);
            $userDB = $repository->findOneBy(['username' => $user->getUsername()]);
            $userDB2 = $repository->findOneBy(['email' => $user->getEmail()]);


            if ($userDB) {
                echo(
                    'Логин занят: '.$user->getUsername()
                );
            }
            else if ($userDB2){
                echo(
                    'Email занят: '.$user->getEmail()
                );
            }
            else {
                // 4) save the User!
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                return $this->redirectToRoute('login');
            }
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
        }

        return $this->render(
            '@DataBase/registration/register.html.twig',
            array('form' => $form->createView())
        );
    }
}