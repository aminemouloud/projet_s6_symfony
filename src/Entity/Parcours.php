<?php

namespace App\Entity;

use App\Repository\ParcoursRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Entity(repositoryClass=ParcoursRepository::class)
 */
class Parcours
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomParcours;

    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @ManyToOne(targetEntity="Semestre")
     **/
    private $Semestre;



    public function getNomParcours(): ?string
    {
        return $this->nomParcours;
    }

    public function setNomParcours(?string $nomParcours): self
    {
        $this->nomParcours = $nomParcours;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSemestre()
    {
        return $this->Semestre;
    }

    /**
     * @param mixed $Semestre
     */
    public function setSemestre($Semestre): void
    {
        $this->Semestre = $Semestre;
    }


}
