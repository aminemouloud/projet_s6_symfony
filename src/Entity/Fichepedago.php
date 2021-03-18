<?php

namespace App\Entity;

use App\Repository\FichepedagoRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Entity(repositoryClass=FichepedagoRepository::class)
 */
class Fichepedago
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idFiche;

    /**
     * @ManyToOne(targetEntity="Etudiant")
     **/
    private $Etudiant;

    /**
     * @ManyToOne(targetEntity="Semestre")
     **/
    private $Semestre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $annee;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $rempli;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $valide;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $transmise;


    public function getAnnee(): ?string
    {
        return $this->annee;
    }

    public function setAnnee(?string $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getRempli(): ?bool
    {
        return $this->rempli;
    }

    public function setRempli(?bool $rempli): self
    {
        $this->rempli = $rempli;

        return $this;
    }

    public function getValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(?bool $valide): self
    {
        $this->valide = $valide;

        return $this;
    }

    public function getTransmise(): ?string
    {
        return $this->transmise;
    }

    public function setTransmise(?string $transmise): self
    {
        $this->transmise = $transmise;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdFiche()
    {
        return $this->idFiche;
    }

    /**
     * @param mixed $idFiche
     */
    public function setIdFiche($idFiche): void
    {
        $this->idFiche = $idFiche;
    }

    /**
     * @return mixed
     */
    public function getEtudiant()
    {
        return $this->Etudiant;
    }

    /**
     * @param mixed $Etudiant
     */
    public function setEtudiant($Etudiant): void
    {
        $this->Etudiant = $Etudiant;
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
