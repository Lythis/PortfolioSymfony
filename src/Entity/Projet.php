<?php

namespace App\Entity;

use App\Repository\ProjetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjetRepository::class)
 */
class Projet
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
    private $image1_projet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image2_projet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image3_projet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $desc_projet;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_projet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tech_projet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage1Projet(): ?string
    {
        return $this->image1_projet;
    }

    public function setImage1Projet(?string $image1_projet): self
    {
        $this->image1_projet = $image1_projet;

        return $this;
    }

    public function getImage2Projet(): ?string
    {
        return $this->image2_projet;
    }

    public function setImage2Projet(?string $image2_projet): self
    {
        $this->image2_projet = $image2_projet;

        return $this;
    }

    public function getImage3Projet(): ?string
    {
        return $this->image3_projet;
    }

    public function setImage3Projet(?string $image3_projet): self
    {
        $this->image3_projet = $image3_projet;

        return $this;
    }

    public function getDescProjet(): ?string
    {
        return $this->desc_projet;
    }

    public function setDescProjet(string $desc_projet): self
    {
        $this->desc_projet = $desc_projet;

        return $this;
    }

    public function getDateProjet(): ?\DateTimeInterface
    {
        return $this->date_projet;
    }

    public function setDateProjet(\DateTimeInterface $date_projet): self
    {
        $this->date_projet = $date_projet;

        return $this;
    }

    public function getTechProjet(): ?string
    {
        return $this->tech_projet;
    }

    public function setTechProjet(string $tech_projet): self
    {
        $this->tech_projet = $tech_projet;

        return $this;
    }
    
}
