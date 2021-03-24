<?php

namespace App\Controller;

use App\Entity\ChoixUE;
use App\Entity\Fichepedago;
use App\Entity\UE;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;





use App\Entity\User;

use App\Entity\Etudiant;
//use App\Form\ConnexionType;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController

{
    private $token;

    public function __construct(TokenStorageInterface $token)
    {
        $this->token = $token;
    }



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
        $utilisateur=$this->token->getToken()->getUser()->getUsername();

        $form=$this->createFormBuilder($etudiant)

            ->add('utilisateur',       TextType::class, array(
                'attr' => array(
                    'readonly value' =>$utilisateur,
                )))

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

        return $this->render('site/createEtudiant.html.twig', [
            'formEtudiant'=>$form->createView()
        ]);


    }

    /**
     * @Route ("/etudiant/{id}",name="etudiant_show")
     */

    public function showEtudiant(Etudiant $etudiant){
        return $this->render('site/showEtudiant.html.twig',[
            'etudiant'=>$etudiant
        ]);
    }


    /**
     * @Route ("/fiche/new",name="fiche_create")
     */

    public function createFiche(Request $request,EntityManagerInterface $manager){
        $fiche= new Fichepedago();
        $form1=$this->createFormBuilder($fiche)

            ->add('Etudiant')
            ->add('Semestre', ChoiceType::class, [
                'choices'  => [
                    '1' => '1',
                    '2' => '2',
                ],
            ])
            ->add('parcours')
            ->add('parcours', ChoiceType::class, [
                'choices'  => [
                    'MIAGE' => 'MIAGE',
                    'INGE' => 'INGE',
                ],
            ])

            ->add('rempli',       NumberType::class, array(
                'attr' => array(
                    ' value' =>1,
                )))
            ->add('valide',       NumberType::class, array(
                'attr' => array(
                    'readonly value' =>0,
                )))
            ->add('transmise',       NumberType::class, array(
                'attr' => array(
                    'readonly value' =>0,
                )))
            ->add('annee',       TextType::class, array(
                'attr' => array(
                    'readonly value' =>"2021",
                )))
            ->add('enregistrer',SubmitType::class,[
                'label'=>'Enregistrer'
            ])

            ->getForm();

        $form1->handleRequest($request);
        dump($fiche);


        if($form1->isSubmitted() && $form1->isValid()) {
            $manager->persist($fiche);

            $manager->flush();

            return $this->redirectToRoute('fiche_show',['id'=>
                $fiche->getId()

            ]);
        }

        return $this->render('site/createFiche.html.twig', [
            'formFiche'=>$form1->createView()
        ]);


    }


    /**
     * @Route ("/fiche/{id}",name="fiche_show")
     */

    public function showFiche(Fiche $fiche){
        return $this->render('site/showFiche.html.twig',[
            'fiche'=>$fiche
        ]);
    }

    /**
     * @Route ("/ue",name="ue_create")
     */

    public function createUE(Request $request,EntityManagerInterface $manager){
        $choixUe= new ChoixUE();
        $form2=$this->createFormBuilder($choixUe)

            ->add('ue', EntityType::class, [
                'class' => UE::class,
                'multiple' => true,

                'choice_label' => 'nomUe',

            ])

            ->add('inscription')
            ->add('note')
            ->add('idFiche')
            ->add('enregistrer',SubmitType::class,[
                'label'=>'Enregistrer'
            ])

            ->getForm();

        $form2->handleRequest($request);
        dump($choixUe);


        if($form2->isSubmitted() && $form2->isValid()) {
            $manager->persist($choixUe);

            $manager->flush();

            return $this->redirectToRoute('choixUE_show',['id'=>
                $choixUe->getId()

            ]);
        }

        return $this->render('site/createUE.html.twig', [
            'formChoixUE'=>$form2->createView()
        ]);


    }



    /**
     * @Route ("/ue/{id}",name="choixUE_show")
     */

    public function showUE(ChoixUE $choixUE){
        return $this->render('site/showUE.html.twig',[
            'choixUE'=>$choixUE
        ]);
    }







}
