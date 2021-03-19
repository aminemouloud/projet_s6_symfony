<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Entity(repositoryClass=EtudiantRepository::class)
 */
class Etudiant
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
    private $numEtudiant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)

     * @ManyToOne(targetEntity="User")
     **/
    private $Utilisateur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DNN;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $RSE;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $redoublant;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tiersTemps;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ajac;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $semestreObtenu;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumEtudiant(): ?string
    {
        return $this->numEtudiant;
    }

    public function setNumEtudiant(?string $numEtudiant): self
    {
        $this->numEtudiant = $numEtudiant;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDNN(): ?\DateTimeInterface
    {
        return $this->DNN;
    }

    public function setDNN(?\DateTimeInterface $DNN): self
    {
        $this->DNN = $DNN;

        return $this;
    }

    public function getRSE(): ?bool
    {
        return $this->RSE;
    }

    public function setRSE(?bool $RSE): self
    {
        $this->RSE = $RSE;

        return $this;
    }

    public function getRedoublant(): ?bool
    {
        return $this->redoublant;
    }

    public function setRedoublant(?bool $redoublant): self
    {
        $this->redoublant = $redoublant;

        return $this;
    }

    public function getTiersTemps(): ?bool
    {
        return $this->tiersTemps;
    }

    public function setTiersTemps(?bool $tiersTemps): self
    {
        $this->tiersTemps = $tiersTemps;

        return $this;
    }

    public function getAjac(): ?bool
    {
        return $this->ajac;
    }

    public function setAjac(?bool $ajac): self
    {
        $this->ajac = $ajac;

        return $this;
    }

    public function getSemestreObtenu(): ?string
    {
        return $this->semestreObtenu;
    }

    public function setSemestreObtenu(?string $semestreObtenu): self
    {
        $this->semestreObtenu = $semestreObtenu;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }






    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUtilisateur()
    {
        return $this->Utilisateur;
    }

    /**
     * @param mixed $Utilisateur
     */
    public function setUtilisateur($Utilisateur): void
    {
        $this->Utilisateur = $Utilisateur;
    }



}
