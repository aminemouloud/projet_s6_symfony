<?php

namespace App\DataFixtures;
use App\Entity\Etudiant;
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
/*
        $user2= new User();
        $user2->setIdUtilisateur('etudiant1');
        $user2->setPassword($this->encoder->encodePassword($user2,'1111'));
        $user2->setRoles( ['ROLE_ETUDIANT']);
        $manager->persist($user2);
        $manager->flush();

        $user3= new User();
        $user3->setIdUtilisateur('responsable1');
        $user3->setPassword($this->encoder->encodePassword($user3,'2222'));
        $user3->setRoles( ['ROLE_RESPONSABLE']);
        $manager->persist($user3);
        $manager->flush();

        $user4= new User();
        $user4->setIdUtilisateur('secretaire1');
        $user4->setPassword($this->encoder->encodePassword($user4,'3333'));
        $user4->setRoles( ['ROLE_SECRETAIRE']);
        $manager->persist($user4);
        $manager->flush();


*/

        $user2= new User();
        $user2->setIdUtilisateur('etudiant1');
        $user2->setPassword($this->encoder->encodePassword($user2,'1111'));
        $user2->setRoles( ['ROLE_ETUDIANT']);


        $etudiant=new Etudiant();
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
        $etudiant->setAdresse("rueoorleans");
        $etudiant->setUtilisateur($user2->getIdUtilisateur());


        $manager->persist($user2);

        $manager->persist($etudiant);
        $manager->flush();


    }
}
