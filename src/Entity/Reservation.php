<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Lieux;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $horraire;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbPassager;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateReservation;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDepart;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pointDePrise;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentaire;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\DepartDestination", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $departDestination;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Trajet", inversedBy="reservations")
     */
    private $trajet;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Facture", inversedBy="reservation", cascade={"persist", "remove"})
     */
    private $facture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $codepostal;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $pays;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Lieux", inversedBy="reservation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Trajet_lieux;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Horaires_Type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Statu;

    public function __construct()
    {
        $this->dateReservation = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHorraire(): ?string
    {
        return $this->horraire;
    }

    public function setHorraire(string $horraire): self
    {
        $this->horraire = $horraire;

        return $this;
    }

    public function getNbPassager(): ?int
    {
        return $this->nbPassager;
    }

    public function setNbPassager(int $nbPassager): self
    {
        $this->nbPassager = $nbPassager;

        return $this;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): self
    {
        $this->dateReservation = $dateReservation;

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

    public function getPointDePrise(): ?string
    {
        return $this->pointDePrise;
    }

    public function setPointDePrise(string $pointDePrise): self
    {
        $this->pointDePrise = $pointDePrise;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getDepartDestination(): ?departDestination
    {
        return $this->departDestination;
    }

    public function setDepartDestination(departDestination $departDestination): self
    {
        $this->departDestination = $departDestination;

        return $this;
    }

    public function getTrajet(): ?trajet
    {
        return $this->trajet;
    }

    public function setTrajet(?trajet $trajet): self
    {
        $this->trajet = $trajet;

        return $this;
    }

    public function getFacture(): ?facture
    {
        return $this->facture;
    }

    public function setFacture(?facture $facture): self
    {
        $this->facture = $facture;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    public function setCodepostal(?string $codepostal): self
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function __toString()
    {
        return "Reservation numéro " . $this->id;
    }

    public function getTrajetLieux(): ?Lieux
    {
        return $this->Trajet_lieux;
    }
    public function setTrajetLieux(?Lieux $Trajet_lieux): self
    {
        $this->Trajet_lieux = $Trajet_lieux;

        return $this;
    }

    public function getHorairesType(): ?bool
    {
        return $this->Horaires_Type;
    }

    public function setHorairesType(bool $Horaires_Type): self
    {
        $this->Horaires_Type = $Horaires_Type;

        return $this;
    }


    public function TrajetNormale()
    {
        $PersMin = $this->Trajet_lieux->getNombreDePassagerMinimum();
        $tarif = $this->Trajet_lieux->getTarif();

        if ($this->getNbPassager() <= $PersMin) {
            $PrixDuTrajet = $PersMin * $tarif;
        } else {
            $PrixDuTrajet = $this->getNbPassager() * $tarif;
        }



        return  $PrixDuTrajet;
    }
    public function horaireFixeAlademande()
    {
        if ($this->Horaires_Type == true) {
            $SuplementHoraire = 0;
        } else {

            $SuplementHoraire = 16;
        }

        return  $SuplementHoraire;
    }
    public function SuplementDomicile()
    {
        if ($this->getPointDePrise() == "Domicile") {
            $PriseEnChargeDomicileStasbourg = 10;
        } else {

            $PriseEnChargeDomicileStasbourg = 0;
        }
        return $PriseEnChargeDomicileStasbourg;
    }


    public function SuplementHeurdeReservation()
    {
        $NombreHeurDifferance = $this->dateDepart->diff($this->dateReservation);
        $heure = $NombreHeurDifferance->days * 24 + $NombreHeurDifferance->h;

        if ($heure <= 72 && $heure >= 24) {
            $DernierMinute = 7;
        } else if ($heure <= 24) {

            $DernierMinute = 14;
        } else {
            $DernierMinute = 0;
        }


        return $DernierMinute;
    }
    public function SuplementHeurdeNuit()
    {
        $heurReservation = strtotime($this->horraire);
        $max = strtotime("21:00");
        $min = strtotime("07:15");

        if ($heurReservation > $max || $heurReservation <=  $min) {
            $ForfaitDeNuit = 14;
        } else {
            $ForfaitDeNuit = 0;
        }


        return $ForfaitDeNuit;
    }



    public function PrixTotal()
    {


        $prix = $this->SuplementHeurdeReservation() + $this->SuplementDomicile() + $this->TrajetNormale() + $this->SuplementHeurdeNuit() + $this->horaireFixeAlademande();
        return $prix;
    }

    public function getStatu(): ?string
    {
        return $this->Statu;
    }

    public function setStatu(?string $Statu): self
    {
        $this->Statu = $Statu;

        return $this;
    }
}
