<?php

namespace App\Entity;

use App\Repository\SemestreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SemestreRepository::class)
 */
class Semestre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true,unique=true)
     */
    private $numSemestre;

    /**
     * @ORM\Column(type="date", length=255, nullable=true)
     */
    private $debut;

    /**
     * @ORM\Column(type="date", length=255, nullable=true)
     */
    private $fin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumSemestre(): ?string
    {
        return $this->numSemestre;
    }

    public function setNumSemestre(?string $numSemestre): self
    {
        $this->numSemestre = $numSemestre;

        return $this;

    }

    /**
     * @return mixed
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * @param mixed $debut
     */
    public function setDebut($debut): void
    {
        $this->debut = $debut;
    }

    /**
     * @return mixed
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * @param mixed $fin
     */
    public function setFin($fin): void
    {
        $this->fin = $fin;
    }

}
