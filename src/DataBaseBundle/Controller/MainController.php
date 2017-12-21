<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 09.12.2017
 * Time: 12:58
 */

namespace DataBaseBundle\Controller;

use DataBaseBundle\Entity\Task;
use DataBaseBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    /**
     * @Route("/index", name="index")
     */
    public function indexAction(Request $request)
    {

        return $this->render('@DataBase/index.html.twig');
    }


    public function newAction(Request $request)
    {
        $login = strtolower(htmlspecialchars($_POST["login"]));
        $repository = $this->getDoctrine()->getRepository(User::class);
        $userDB = $repository->findOneBy(['username' => $login]);
        $test = ($userDB!=null);
        echo $test;
        die();
    }
}