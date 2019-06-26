<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MemorialAllerRetourRepository")
 */
class MemorialAllerRetour
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $depart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $destination;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombrePassagerAller;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombrePassagerRetour;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDepart;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateRetour;

    /**
     * @ORM\Column(type="string", length=255) 
     */
    private $horaireDeDepart;

    /**
     * @ORM\Column(type="string", length=255)               
     */
    private $horaireRetour;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepart(): ?string
    {
        return $this->depart;
    }

    public function setDepart(string $depart): self
    {
        $this->depart = $depart;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getNombrePassagerAller(): ?int
    {
        return $this->nombrePassagerAller;
    }

    public function setNombrePassagerAller(int $nombrePassagerAller): self
    {
        $this->nombrePassagerAller = $nombrePassagerAller;

        return $this;
    }

    public function getNombrePassagerRetour(): ?int
    {
        return $this->nombrePassagerRetour;
    }

    public function setNombrePassagerRetour(int $nombrePassagerRetour): self
    {
        $this->nombrePassagerRetour = $nombrePassagerRetour;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->dateDepart;
    }

    public function setDateDepart(\DateTimeInterface $dateDepart): self
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getDateRetour(): ?\DateTimeInterface
    {
        return $this->dateRetour;
    }

    public function setDateRetour(\DateTimeInterface $dateRetour): self
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    public function getHoraireDeDepart(): ?string
    {
        return $this->horaireDeDepart;
    }

    public function setHoraireDeDepart(string $horaireDeDepart): self
    {
        $this->horaireDeDepart = $horaireDeDepart;

        return $this;
    }

    public function getHoraireRetour(): ?string
    {
        return $this->horaireRetour;
    }

    public function setHoraireRetour(string $horaireRetour): self
    {
        $this->horaireRetour = $horaireRetour;

        return $this;
    }
}

