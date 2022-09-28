<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class Users extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $u1 = new User();
        $u1->setEmail("admin");
        $u1->setPassword('$2y$13$wis8CO3oKcctsG9xYYEOn.wb1hhOyOrw4oyEkCNmF8iSg0Au.LtVu');
        $u1->setRoles(['ROLE_ADMIN']);

        $manager->persist($u1);

        $manager->flush();
    }
}
