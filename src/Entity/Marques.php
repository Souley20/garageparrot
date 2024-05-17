<?php

namespace App\Entity;

use App\Repository\MarquesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarquesRepository::class)]
class Marques
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $nomMarques = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $modeles = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMarques(): ?string
    {
        return $this->nomMarques;
    }

    public function setNomMarques(?string $nomMarques): static
    {
        $this->nomMarques = $nomMarques;

        return $this;
    }

    public function getModeles(): ?string
    {
        return $this->modeles;
    }

    public function setModeles(?string $modeles): static
    {
        $this->modeles = $modeles;

        return $this;
    }
}
