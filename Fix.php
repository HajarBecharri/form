<?php

namespace App\DataFixtures;
use App\Entity\PersonneRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Fix extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $p = new Personne();
            $p->setname('hajar');
            $p->setage(mt_rand(10, 100));
            $manager->persist($p);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
