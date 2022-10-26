<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OffreRepository::class)]
class Offre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::BLOB, nullable: true)]
    private $img = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column]
    private ?int $prix = null;

    #[ORM\Column]
    private ?int $datecrea = null;

    #[ORM\Column]
    private ?int $datemaj = null;

    #[ORM\Column(length: 255)]
    private ?string $tagoffre = null;

    #[ORM\Column(length: 255)]
    private ?string $commentaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDatecrea(): ?int
    {
        return $this->datecrea;
    }

    public function setDatecrea(int $datecrea): self
    {
        $this->datecrea = $datecrea;

        return $this;
    }

    public function getDatemaj(): ?int
    {
        return $this->datemaj;
    }

    public function setDatemaj(int $datemaj): self
    {
        $this->datemaj = $datemaj;

        return $this;
    }

    public function getTagoffre(): ?string
    {
        return $this->tagoffre;
    }

    public function setTagoffre(string $tagoffre): self
    {
        $this->tagoffre = $tagoffre;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }
}
