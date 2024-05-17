<?php

namespace App\Entity;

use App\Repository\VoituresOccasionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VoituresOccasionsRepository::class)]
class VoituresOccasions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $prix = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $annee = null;

    #[ORM\Column]
    private ?int $kilometrage = null;

    #[ORM\Column(length: 50)]
    private ?string $carburant = null;

    #[ORM\Column(length: 50)]
    private ?string $boiteDeVitesse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAnnee(): ?\DateTimeInterface
    {
        return $this->annee;
    }

    public function setAnnee(\DateTimeInterface $annee): static
    {
        $this->annee = $annee;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(int $kilometrage): static
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getCarburant(): ?string
    {
        return $this->carburant;
    }

    public function setCarburant(string $carburant): static
    {
        $this->carburant = $carburant;

        return $this;
    }

    public function getBoiteDeVitesse(): ?string
    {
        return $this->boiteDeVitesse;
    }

    public function setBoiteDeVitesse(string $boiteDeVitesse): static
    {
        $this->boiteDeVitesse = $boiteDeVitesse;

        return $this;
    }
}
