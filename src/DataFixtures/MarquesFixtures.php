<?php

namespace App\DataFixtures;

use App\Entity\Marques;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MarquesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $marquesEtModeles = [
            'Citroën' => 'Traction 11 B',            
            'Mercedes' => '190 SL Cabriolet',
            'Renault' => '4l',            
            'BMW' => '2002 Tii Touring',
            'Jeep' => 'Renegade',
            'Porsche' => '912 SWB',
        ];

        foreach ($marquesEtModeles as $nomMarque => $modeles) {
            $marque = new Marques();
            $marque->setNomMarques($nomMarque);
            $marque->setModeles($modeles);
            $manager->persist($marque);
        }

        $manager->flush();
    }
}