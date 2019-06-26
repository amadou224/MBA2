<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LieuDeDepartRepository")
 */
class LieuDeDepart
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
    private $PointDePrise;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPointDePrise(): ?string
    {
        return $this->PointDePrise;
    }

    public function setPointDePrise(string $PointDePrise): self
    {
        $this->PointDePrise = $PointDePrise;

        return $this;
    }
}
