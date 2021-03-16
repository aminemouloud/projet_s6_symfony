<?php

namespace App\DataFixtures;
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
        $user= new User();
        $user->setIdUtilisateur('admin');
        $user->setMdp($this->encoder->encodePassword($user,'0000'));
        $user->setType('etudiant');
        $manager->persist($user);
        $manager->flush();


    }
}
