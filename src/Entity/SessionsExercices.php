<?php

namespace App\Entity;

use App\Repository\SessionsExercicesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SessionsExercicesRepository::class)]
class SessionsExercices
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column()]
    private ?int $utilisateurID = null;

    #[ORM\Column]
    private ?int $exerciceID = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $repetitionsNombre = null;

    #[ORM\Column]
    private ?int $seriesNombres = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateurID(): ?int
    {
        return $this->utilisateurID;
    }

    public function setUtilisateurID(int $utilisateurID): static
    {
        $this->utilisateurID = $utilisateurID;

        return $this;
    }

    public function getExerciceID(): ?int
    {
        return $this->exerciceID;
    }

    public function setExerciceID(int $exerciceID): static
    {
        $this->exerciceID = $exerciceID;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getRepetitionsNombre(): ?int
    {
        return $this->repetitionsNombre;
    }

    public function setRepetitionsNombre(int $repetitionsNombre): static
    {
        $this->repetitionsNombre = $repetitionsNombre;

        return $this;
    }

    public function getSeriesNombres(): ?int
    {
        return $this->seriesNombres;
    }

    public function setSeriesNombres(int $seriesNombres): static
    {
        $this->seriesNombres = $seriesNombres;

        return $this;
    }
}
