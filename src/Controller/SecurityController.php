<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;



use App\Entity\Etudiant;
//use App\Form\ConnexionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
    /**
     * @Route ("/etudiant/new",name="etudiant_create")
     */

    public function create(Request $request,EntityManagerInterface $manager){
        $etudiant= new Etudiant();

        $form=$this->createFormBuilder($etudiant)
            ->add('numEtudiant')
            //->add('Utilisateur')
            ->add('nom')
            ->add('prenom')
            ->add('DNN')
            ->add('RSE')
            ->add('redoublant')
            ->add('tiersTemps')
            ->add('ajac')
            ->add('semestreObtenu')
            ->add('adresse')
            ->add('email')
            ->add('enregistrer',SubmitType::class,[
                'label'=>'Enregistrer'
            ])
            ->getForm();

        $form->handleRequest($request);
        dump($etudiant);

        if($form->isSubmitted() && $form->isValid()) {
        $manager->persist($etudiant);
        $manager->flush();

        return $this->redirectToRoute('etudiant_show',['id'=>
        $etudiant->getId()

        ]);
        }

        return $this->render('site/create.html.twig', [
            'formEtudiant'=>$form->createView()
        ]);
    }

    /**
     * @Route ("/etudiant/{id}",name="etudiant_show")
     */

    public function show(Etudiant $etudiant){
        return $this->render('site/show.html.twig',[
            'etudiant'=>$etudiant
        ]);
    }

}
