<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\MemorialAllerRepository")
 */
class MemorialAller
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
     * @ORM\Column(type="integer")
     */
    private $nombrePassager;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDeDepart;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $heureDeDepart;    // time

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

    public function getNombrePassager(): ?int
    {
        return $this->nombrePassager;
    }

    public function setNombrePassager(int $nombrePassager): self
    {
        $this->nombrePassager = $nombrePassager;

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
  

    public function getDateDeDepart(): ?\DateTimeInterface
    {
        return $this->dateDeDepart;
    }

    public function setDateDeDepart(\DateTimeInterface $dateDeDepart): self
    {
        $this->dateDeDepart = $dateDeDepart;

        return $this;
    }

    
    public function getHeureDeDepart(): ?string
    {
        return $this->heureDeDepart;
    }

      
    public function setHeureDeDepart(string  $heureDeDepart):self       
    {
        $this->heureDeDepart = $heureDeDepart;

        return $this;
    }
}

