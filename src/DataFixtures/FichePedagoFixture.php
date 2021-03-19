<?php

namespace App\DataFixtures;

use App\Entity\Etudiant;
use App\Entity\Fichepedago;
use App\Entity\Semestre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FichePedagoFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /*$fichePedago= new Fichepedago();
        $fichePedago->setEtudiant($manager->find(Etudiant::class,7 ));
        $fichePedago->setSemestre($manager->find(Semestre::class,4 ));

        $fichePedago->setAnnee('2020');
        $fichePedago->setRempli(true);
        $fichePedago->setTransmise(false);
        $fichePedago->setValide(false);

        $manager->persist($fichePedago);
        $manager->flush();*/





    }
}
