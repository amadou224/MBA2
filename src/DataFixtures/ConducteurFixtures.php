<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Chauffeur;
use Proxies\__CG__\App\Entity\Vehicule;

class ConducteurFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i <= 5; $i++) {
            $chauffeur = new Chauffeur();
            $chauffeur->setNom("chauffeurNom n°:$i");
            $chauffeur->setPrenom("chauffeurPrenom n°:$i");
            $chauffeur->setAdresse("chauffeurNom n°:$i");
            $chauffeur->setEmail("mbana$i@yahoo.com");
            $chauffeur->setVille("ville n°:$i");
            $chauffeur->setTelportable("075310576$i");
            $chauffeur->setTelfix("075310576$i");

            $vehicule = new Vehicule();
            $vehicule->setTypeVehicule("alsace navette n° $i");
            $vehicule->setPlace(8);

            $manager->persist($vehicule);
            $manager->persist($chauffeur);
        }


        $manager->flush();
    }
}
