<?php

namespace App\Entity;

use App\Repository\UERepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Entity(repositoryClass=UERepository::class)
 */
class UE
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
    private $codeUe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomUe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @ManyToOne(targetEntity="Parcours")

     **/
    private $Parcours;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @ManyToOne(targetEntity="Semestre")
     **/
    private $semestre;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ects;

    /**
     * @ORM\Column(type="boolean", length=255, nullable=true)
     */
    private $presenceoblige;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $inscription;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $note;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNomUe()
    {
        return $this->nomUe;
    }

    /**
     * @param mixed $nomUe
     */
    public function setNomUe($nomUe): void
    {
        $this->nomUe = $nomUe;
    }





    public function getEcts(): ?string
    {
        return $this->ects;
    }

    public function setEcts(?string $ects): self
    {
        $this->ects = $ects;

        return $this;
    }

    public function getPresenceoblige(): ?string
    {
        return $this->presenceoblige;
    }

    public function setPresenceoblige(?string $presenceoblige): self
    {
        $this->presenceoblige = $presenceoblige;

        return $this;
    }

    public function getInscription(): ?bool
    {
        return $this->inscription;
    }

    public function setInscription(?bool $inscription): self
    {
        $this->inscription = $inscription;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodeUe()
    {
        return $this->codeUe;
    }

    /**
     * @param mixed $codeUe
     */
    public function setCodeUe($codeUe): void
    {
        $this->codeUe = $codeUe;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getParcours()
    {
        return $this->Parcours;
    }

    /**
     * @param mixed $Parcours
     */
    public function setParcours($Parcours): void
    {
        $this->Parcours = $Parcours;
    }

    /**
     * @return mixed
     */
    public function getSemestre()
    {
        return $this->semestre;
    }

    /**
     * @param mixed $semestre
     */
    public function setSemestre($semestre): void
    {
        $this->semestre = $semestre;
    }



}
