<?php

namespace App\DataFixtures;

use App\Entity\Parcours;

use App\Entity\Semestre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ParcoursFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /*$parcours= new Parcours();
        $parcours->setSemestre();
        $parcours->setNomParcours('MIAGE');
        $manager->persist($parcours);
        $manager->flush();*/

    }
}
