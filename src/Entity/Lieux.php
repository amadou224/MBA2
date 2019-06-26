<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LieuxRepository")
 */
class Lieux
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $lieux;

    /**
     * @ORM\Column(type="boolean")
     */
    private $annexe;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Tarif;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NombreDePassagerMinimum;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reservation", mappedBy="Trajet_lieux")
     */
    private $reservation;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $Horaires = [];

    public function __construct()
    {
        $this->reservation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLieux(): ?string
    {
        return $this->lieux;
    }

    public function setLieux(string $lieux): self
    {
        $this->lieux = $lieux;

        return $this;
    }

    public function getAnnexe(): ?bool
    {
        return $this->annexe;
    }

    public function setAnnexe(bool $annexe): self
    {
        $this->annexe = $annexe;

        return $this;
    }

    public function getTarif(): ?int
    {
        return $this->Tarif;
    }

    public function setTarif(?int $Tarif): self
    {
        $this->Tarif = $Tarif;

        return $this;
    }

    public function getNombreDePassagerMinimum(): ?int
    {
        return $this->NombreDePassagerMinimum;
    }

    public function setNombreDePassagerMinimum(?int $NombreDePassagerMinimum): self
    {
        $this->NombreDePassagerMinimum = $NombreDePassagerMinimum;

        return $this;
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getReservation(): Collection
    {
        return $this->reservation;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservation->contains($reservation)) {
            $this->reservation[] = $reservation;
            $reservation->setTrajetLieux($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservation->contains($reservation)) {
            $this->reservation->removeElement($reservation);
            // set the owning side to null (unless already changed)
            if ($reservation->getTrajetLieux() === $this) {
                $reservation->setTrajetLieux(null);
            }
        }

        return $this;
    }

    public function getHoraires(): ?array
    {
        return $this->Horaires;
    }

    public function setHoraires(?array $Horaires): self
    {
        $this->Horaires = $Horaires;

        return $this;
    }
}
