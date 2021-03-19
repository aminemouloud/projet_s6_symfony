<?php

namespace App\Entity;

use App\Repository\ChoixUERepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;


/**
 * @ORM\Entity(repositoryClass=ChoixUERepository::class)
 */
class ChoixUE
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @ManyToOne(targetEntity="ue")

     **/
    private $nomUe;

    /**
     * @ORM\Column(type="boolean", length=255, nullable=true)
     */
    private $inscription;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $note;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @ManyToOne(targetEntity="UE")

     **/
    private $idFiche;

    public function getId(): ?int
    {
        return $this->id;
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




}
