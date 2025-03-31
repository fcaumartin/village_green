<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use App\Repository\ProduitRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ApiResource(
    normalizationContext: [ "groups" => ["read:produit"]],

    operations: [
        new Get(),
        new GetCollection()
    ]

)]
#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    #[Groups(["read:produit"])]
    private $id;

    #[ORM\Column(type: "string", length: 255)]
    #[Groups(["read:produit"])]
    private $nom;

    #[ORM\Column(type: "text", nullable: true)]
    #[Groups(["read:produit"])]
    private $description;

    #[ORM\Column(type: "float")]
    #[Groups(["read:produit"])]
    private $prix;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $image;

    #[ORM\ManyToOne(targetEntity: SousCategorie::class, inversedBy: "produits")]
    #[Groups("read:produit")]
    private $sousCategorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getSousCategorie(): ?SousCategorie
    {
        return $this->sousCategorie;
    }

    public function setSousCategorie(?SousCategorie $sousCategorie): self
    {
        $this->sousCategorie = $sousCategorie;

        return $this;
    }
}
