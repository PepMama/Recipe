<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ApiResource]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $mail = null;

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(length: 50)]
    private ?string $firstname = null;

    #[ORM\OneToMany(targetEntity: Recipe::class, mappedBy: "author")]
    private Collection $recipes;

    #[ORM\OneToMany(targetEntity: Comment::class, mappedBy: "user")]
    private Collection $comments;

    #[ORM\OneToMany(targetEntity: Favorite::class, mappedBy: "user")]
    private Collection $favorites;

    public function __construct()
    {
        $this->recipes = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->favorites = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }
    public function getMail(): ?string { return $this->mail; }
    public function setMail(string $mail): self { $this->mail = $mail; return $this; }
    public function getPassword(): ?string { return $this->password; }
    public function setPassword(string $password): self { $this->password = $password; return $this; }
    public function getName(): ?string { return $this->name; }
    public function setName(string $name): self { $this->name = $name; return $this; }
    public function getFirstname(): ?string { return $this->firstname; }
    public function setFirstname(string $firstname): self { $this->firstname = $firstname; return $this; }
    
    public function getRecipes(): Collection { return $this->recipes; }
    public function getComments(): Collection { return $this->comments; }
    public function getFavorites(): Collection { return $this->favorites; }
}
