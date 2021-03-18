<?php

namespace App\DataFixtures;

use App\Entity\Semestre;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SemestreFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $debut= new \DateTime('2020-09-01');
        $fin= new \DateTime('2021-01-01');

        $semestre= new Semestre();

        $semestre->setNumSemestre('1');
        $semestre->setDebut($debut);
        $semestre->setFin($fin);

        $manager->persist($semestre);
        $manager->flush();


        $manager->flush();
    }
}
