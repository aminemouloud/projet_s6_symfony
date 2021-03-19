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

        $ue= new UE();
        $ue->setParcours($parcours1S1->getNomParcours());
        $ue->setSemestre($semestre->getNumSemestre());
        $ue->setCodeUe('javaS5');
        $ue->setNomUe('prog avancee java');
        $ue->setEcts('4');
        $ue->setPresenceoblige(true);

        //$ue->setInscription(true);
        //$ue->setNote(13);

        //instance de UE parcours inge
        $ue2= new UE();
        $ue2->setParcours($parcours1S1->getNomParcours());
        $ue2->setSemestre($semestre->getNumSemestre());
        $ue2->setCodeUe('ana algo S5');
        $ue2->setNomUe('analyse des algorithmes S5');
        $ue2->setEcts('4');
        $ue2->setPresenceoblige(true);

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
        $manager->persist($ue2);
        $manager->persist($semestre2);


        $manager->flush();


    }
}
