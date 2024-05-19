<?php

namespace App\DataFixtures;

use App\Entity\Avis;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AvisFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $avi1 = new Avis();
        $avi1->setNom('D');
        $avi1->setPrenom('Marine');
        $avi1->setCommentaire('Expert en communication; Le personnel de garage V. Parrot donne toutes leurs possibilités pour combler l’envie de nos clients réalisable. Malheureusement, l’entreprise risque de perdre certaines de son personnel faisant partie des expérimentés. Nous demandons à nos clients d’être compréhensible envers nous à ce moment d’organisationnel.');
        $avi1->setDate(\DateTime::createFromFormat('d-m-Y H:i', '20-04-2024 10:30'));
        $avi1->setValide(true);
        $manager->persist($avi1);

        $avi2 = new Avis();
        $avi2->setNom('P');
        $avi2->setPrenom('John');
        $avi2->setCommentaire('Ressources Humaines (RH), L’entreprise fait à un maniement de son personnel. Toutefois, on reste habile au bon fonctionnement de l’entreprise pour satisfaire les envies de nos clits.');
        $avi2->setDate(\DateTime::createFromFormat('d-m-Y H:i', '18-09-2023 14:27'));
        $avi2->setValide(true);
        $manager->persist($avi2);

        $avi3 = new Avis();
        $avi3->setNom('T');
        $avi3->setPrenom('Assétou');
        $avi3->setCommentaire('Employée de bureau, Pendant ce temps d’organisation, l’entreprise risque de manque un peu à sa responsabilité envers les envies de ses clientèles. Toutefois, nos clients peuvent être rassurés que le personnel du garage V. Parrot restera dévouer à leur engagement envers nos clients.');
        $avi3->setDate(\DateTime::createFromFormat('d-m-Y H:i', '30-09-2024 15:41'));
        $avi3->setValide(true);
        $manager->persist($avi3);

        $manager->flush();
    }
}