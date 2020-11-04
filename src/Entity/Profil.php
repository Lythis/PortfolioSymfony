<?php

namespace App\Entity;

use App\Repository\ProfilRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfilRepository::class)
 */
class Profil
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_compte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $motdepasse_Profil;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCompte(): ?string
    {
        return $this->nom_compte;
    }

    public function setNomCompte(string $nom_compte): self
    {
        $this->nom_compte = $nom_compte;

        return $this;
    }

    public function getMotdepasseProfil(): ?string
    {
        return $this->motdepasse_Profil;
    }

    public function setMotdepasseProfil(string $motdepasse_Profil): self
    {
        $this->motdepasse_Profil = $motdepasse_Profil;

        return $this;
    }
}
