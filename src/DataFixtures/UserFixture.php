<?php

namespace App\DataFixtures;
use App\Entity\Etudiant;
use App\Entity\Fichepedago;
use App\Entity\UE;
use App\Entity\Parcours;
use App\Entity\Semestre;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{
    private $encoder ;
    public function __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder=$encoder;

    }

    public function load(ObjectManager $manager)
    {
       /* $user= new User();
        $user->setIdUtilisateur('admin1');
        $user->setPassword($this->encoder->encodePassword($user,'0000'));
        $user->setRoles( ['ROLE_USER']);
        $manager->persist($user);
        $manager->flush();*/

        //instance de user responsable
        $user3= new User();
        $user3->setIdUtilisateur('responsable1');
        $user3->setPassword($this->encoder->encodePassword($user3,'2222'));
        $user3->setRoles( ['ROLE_RESPONSABLE']);

        //instance de user secretaire

        $user4= new User();
        $user4->setIdUtilisateur('secretaire1');
        $user4->setPassword($this->encoder->encodePassword($user4,'3333'));
        $user4->setRoles( ['ROLE_SECRETAIRE']);

        //instance de user etudiant
        $user2= new User();
        $user2->setIdUtilisateur('etudiant1');
        $user2->setPassword($this->encoder->encodePassword($user2,'1111'));
        $user2->setRoles( ['ROLE_ETUDIANT']);

//instance de semestre
        $debut= new \DateTime('2020-09-01');
        $fin= new \DateTime('2021-01-01');

        $semestre= new Semestre();
        $semestre->setNumSemestre('1');
        $semestre->setDebut($debut);
        $semestre->setFin($fin);

        //instance de semestre 2
        $debut= new \DateTime('2021-01-01');
        $fin= new \DateTime('2021-06-01');

        $semestre2= new Semestre();
        $semestre2->setNumSemestre('2');
        $semestre2->setDebut($debut);
        $semestre2->setFin($fin);



//instance de etudiant
        $etudiant=new Etudiant();
        $etudiant->setAdresse("rueoorleans");
        $etudiant->setAjac(false);
        $etudiant->setDNN(new \DateTime('1999-01-01'));
        $etudiant->setEmail("amine@hotmail.Fr");
        $etudiant->setNom("mouloud");
        $etudiant->setNumEtudiant("2185765");
        $etudiant->setPrenom("amine");
        $etudiant->setRedoublant(false);
        $etudiant->setRSE(false);
        $etudiant->setSemestreObtenu("1 2 3 4 5 ");
        $etudiant->setTiersTemps(false);
        $etudiant->setUtilisateur($user2->getIdUtilisateur());

        //instance de parcours miage  SEM1


        $parcours1S1= new Parcours();
        $parcours1S1->setSemestre($semestre->getNumSemestre());
        $parcours1S1->setNomParcours('MIAGE');

        //PARCOURS MIAGE SEMESTRE 2


        $parcours1S2= new Parcours();
        $parcours1S2->setSemestre($semestre2->getNumSemestre());
        $parcours1S2->setNomParcours('MIAGE');



        //PARCOURS INGE SEMESTRE 1

        $parcours2S1= new Parcours();
        $parcours2S1->setSemestre($semestre->getNumSemestre());
        $parcours2S1->setNomParcours('INGE');

        //PARCOURS INGE SEMESTRE 2

        $parcours2S2= new Parcours();
        $parcours2S2->setSemestre($semestre2->getNumSemestre());
        $parcours2S2->setNomParcours('INGE');


//instance de fiche Pedago

        $fichePedago= new Fichepedago();
        $fichePedago->setSemestre($semestre->getNumSemestre());
        $fichePedago->setEtudiant($etudiant->getNumEtudiant());
        $fichePedago->setParcours($parcours1S1->getNomParcours());
        $fichePedago->setAnnee('2020');
        $fichePedago->setRempli(true);
        $fichePedago->setTransmise(false);
        $fichePedago->setValide(false);






        //instance de UE parcours miage
    //ue miage s1
        $ue= new UE();
        $ue->setParcours($parcours1S1->getNomParcours());
        $ue->setSemestre($semestre->getNumSemestre());
        $ue->setCodeUe('javaS5');
        $ue->setNomUe('prog avancee java');
        $ue->setEcts('4');
        $ue->setPresenceoblige(true);
        //ue3  miage s1
        $ue3= new UE();
        $ue3->setParcours($parcours1S1->getNomParcours());
        $ue3->setSemestre($semestre->getNumSemestre());
        $ue3->setCodeUe('SI S5');
        $ue3->setNomUe('systeme d_information');
        $ue3->setEcts('5');
        $ue3->setPresenceoblige(true);
// UE4 MIAGE S2
        $ue4= new UE();
        $ue4->setParcours($parcours1S2->getNomParcours());
        $ue4->setSemestre($semestre2->getNumSemestre());
        $ue4->setCodeUe('ProgNT');
        $ue4->setNomUe('programmation n_tiers');
        $ue4->setEcts('6');
        $ue4->setPresenceoblige(true);

        // UE5 MIAGE S2
        $ue5= new UE();
        $ue5->setParcours($parcours1S2->getNomParcours());
        $ue5->setSemestre($semestre2->getNumSemestre());
        $ue5->setCodeUe('FMWEB_s5');
        $ue5->setNomUe('FRAMEWORK WEB ');
        $ue5->setEcts('3');
        $ue5->setPresenceoblige(true);

        // UE6 inge S1
        $ue6= new UE();
        $ue6->setParcours($parcours2S1->getNomParcours());
        $ue6->setSemestre($semestre->getNumSemestre());
        $ue6->setCodeUe('PROG C/C++');
        $ue6->setNomUe('programmation c et c++ ');
        $ue6->setEcts('5');
        $ue6->setPresenceoblige(true);

        // UE7 inge S1
        $ue7= new UE();
        $ue7->setParcours($parcours2S1->getNomParcours());
        $ue7->setSemestre($semestre->getNumSemestre());
        $ue7->setCodeUe('lang alg');
        $ue7->setNomUe('langage algebriques');
        $ue7->setEcts('4');
        $ue7->setPresenceoblige(true);

        // UE8 inge S2
        $ue8= new UE();
        $ue8->setParcours($parcours2S2->getNomParcours());
        $ue8->setSemestre($semestre2->getNumSemestre());
        $ue8->setCodeUe('PROG logique');
        $ue8->setNomUe('programmation logique ');
        $ue8->setEcts('5');
        $ue8->setPresenceoblige(true);

        // UE9 inge S2
        $ue9= new UE();
        $ue9->setParcours($parcours2S2->getNomParcours());
        $ue9->setSemestre($semestre2->getNumSemestre());
        $ue9->setCodeUe('Proj_ING_s6');
        $ue9->setNomUe('projet informatique INGE s6 ');
        $ue9->setEcts('5');
        $ue9->setPresenceoblige(true);












        //$ue->setInscription(true);
        //$ue->setNote(13);



        //$ue2->setInscription(true);
        //$ue->setNote(12);


        $manager->persist($semestre);
        $manager->persist($user2);
        $manager->persist($user3);
        $manager->persist($user4);
        $manager->persist($etudiant);
        $manager->persist($fichePedago);
        $manager->persist($parcours1S1);
        $manager->persist($parcours1S2);
        $manager->persist($parcours2S1);
        $manager->persist($parcours2S2);

        $manager->persist($ue);
        $manager->persist($ue3);
        $manager->persist($ue4);
        $manager->persist($ue5);
        $manager->persist($ue6);
        $manager->persist($ue7);
        $manager->persist($ue8);
        $manager->persist($ue9);


        $manager->persist($semestre2);


        $manager->flush();


    }
}
