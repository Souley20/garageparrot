<?php

namespace App\DataFixtures;

use App\Entity\FormulaireDeRenseignement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FormulaireDeRenseignementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $formulaire = new FormulaireDeRenseignement();
        $formulaire->setNom('Daniella');
        $formulaire->setPrenom('Marine');
        $formulaire->setTelephone('0753180318');
        $formulaire->setEmail('marine.d@gmail.com');
        $formulaire->setSujet('Demande de renseignements pour l\'entretien et la réparation du filtre de mon ancienne véhicule');
        $formulaire->setMessage(
            'Madame, Monsieur,
        Je me permets de vous contacter pour solliciter votre expertise pour l\'entretien et la réparation du filtre sur mon ancienne voiture [Précisez le modèle et l\'année de la voiture]. Ce véhicule représente tout pour moi, rencontre actuellement des problèmes liés au carburateur, notamment [décrivez les symptômes ou problèmes rencontrés].
        Pouvez-vous me fournir des informations sur les services que vous proposez pour l\'entretien et la réparation de ce type de véhicule ? Je suis particulièrement intéressée par les éléments suivants :
        Diagnostic et estimation : Disposez-vous des équipements nécessaires pour effectuer un diagnostic précis des problèmes de ce modèle de véhicules ?
        Réparation et pièces de rechange : Avez-vous accès à des pièces de rechange spécifiques pour ce modèle de véhicule ?
        Coût et durée : Quel serait le coût estimé et le temps nécessaire pour une telle réparation ?
        Expérience et références : Pouvez-vous me fournir des exemples ou des références de travaux similaires que vous avez effectués sur des véhicules de ce type ?
        Je reste à votre disposition pour vous fournir tout renseignement complémentaire ou pour convenir d\'un rendez-vous afin d\'examiner le véhicule plus en détail.
        Je vous remercie d\'avance pour votre réponse et j\'espère que vous pourrez m\'aider à remettre ce précieux véhicule en état de fonctionnement optimal.
        Cordialement'
        );
        $formulaire->setValide(true);

        $manager->persist($formulaire);
        $manager->flush();
    }
}