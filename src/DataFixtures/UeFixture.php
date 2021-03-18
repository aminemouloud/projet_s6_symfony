<?php

namespace App\DataFixtures;

use App\Entity\UE;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UeFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /*$ue= new UE();
        $ue->setParcours(1);

        $ue->setCodeUe('javaS5');
        $ue->setNomUe('prog avancee java');
        $ue->setEcts('4');
        $ue->setPresenceoblige(true);
        //$ue->setInscription(true);
        //$ue->setNote(13);

        $manager->persist($ue);
        $manager->flush();

        $ue2= new UE();
        $ue2->setParcours(1);

        $ue2->setCodeUe('Si S5');
        $ue2->setNomUe('Systeme dinformation');
        $ue2->setEcts('4');
        $ue2->setPresenceoblige(true);
        //$ue2->setInscription(true);
        //$ue->setNote(12);

        $manager->persist($ue2);
        $manager->flush();*/



    }
}
