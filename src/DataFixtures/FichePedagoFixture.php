<?php

namespace App\DataFixtures;

use App\Entity\Etudiant;
use App\Entity\Fichepedago;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FichePedagoFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
       // $manager->find(Etudiant::class,6 );



    }
}
