<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setfirstName('Philippe');
        $user->setlastName('Noiret');
        $user->setcivility('Homme');
        $user->setemail('noiret@gmail.com');
        $user->setpassword('xyz');
        $manager->persist($user);

        $manager->flush();
    }
}
