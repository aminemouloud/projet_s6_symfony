<?php

namespace App\Controller;

use App\Form\ConnexionType;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{


    /**
     * @Route ("/connexion",name="security_connexion")
     */

    public function connexion(Request $request,AuthenticationUtils $utils){

    //$form=$this->createForm(ConnexionType::class, $user);
    //if($form->isSubmitted() && $form->isValid()) {
        //$utilisateur=$this ->getDoctrine() ->getRepository ("User")
        //->findBy();
    //}
        $error=$utils->getLastAuthenticationError();
        $lastUsername=$utils->getLastUsername();


        return $this->render('security/login.html.twig', [
            'error' =>$error,
            'last_username'=>$lastUsername
        ]);
    }


    /**
     * @Route ("/deconnexion",name="security_deconnexion")
     */

    public function deconnexion(){

    }

}
