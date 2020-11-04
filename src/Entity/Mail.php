<?php

namespace App\Entity;

use App\Repository\MailRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MailRepository::class)
 */
class Mail
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
    private $Nom_Mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Objet_Mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Message_Mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom_Mail;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMail(): ?string
    {
        return $this->Nom_Mail;
    }

    public function setNomMail(string $Nom_Mail): self
    {
        $this->Nom_Mail = $Nom_Mail;

        return $this;
    }

    public function getObjetMail(): ?string
    {
        return $this->Objet_Mail;
    }

    public function setObjetMail(string $Objet_Mail): self
    {
        $this->Objet_Mail = $Objet_Mail;

        return $this;
    }

    public function getMessageMail(): ?string
    {
        return $this->Message_Mail;
    }

    public function setMessageMail(string $Message_Mail): self
    {
        $this->Message_Mail = $Message_Mail;

        return $this;
    }

    public function getPrenomMail(): ?string
    {
        return $this->Prenom_Mail;
    }

    public function setPrenomMail(string $Prenom_Mail): self
    {
        $this->Prenom_Mail = $Prenom_Mail;

        return $this;
    }
}
