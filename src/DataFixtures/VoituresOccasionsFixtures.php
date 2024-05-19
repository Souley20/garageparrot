<?php

namespace App\DataFixtures;

use App\Entity\Marques;
use App\Entity\VoituresOccasions;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class VoituresOccasionsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $voituresData = [
            [
                'prix' => 17400,
                'annee' => new \DateTime('2014-01-01'),
                'kilometrage' => 130307,
                'carburant' => 'Diesel',
                'boiteDeVitesse' => 'Automatique',
                'nomMarque' => 'Mercedes CLA',
                'nomModele' => '5 cv (1eme Generation) 1.180 CDI 109'
            ],
        ];

        // foreach ($voituresData as $data)
        foreach ($voituresData as $index => $data) {
            $voiture = new VoituresOccasions();
            $voiture->setPrix($data['prix']);
            $voiture->setAnnee($data['annee']);
            $voiture->setKilometrage($data['kilometrage']);
            $voiture->setCarburant($data['carburant']);
            $voiture->setBoiteDeVitesse($data['boiteDeVitesse']);
            $marque = $manager->getRepository(Marques::class)->findOneBy(['nomMarques' => $data['nomMarque']]);
            if ($marque) {
                $voiture->setVoituresOcassionsMarques($marque);
            }
            $manager->persist($voiture);
            $this->addReference('voiture-' . $index, $voiture);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            MarquesFixtures::class,
        ];
    }
}