<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class RecipeIngredient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Recipe::class)]
    #[ORM\JoinColumn(nullable: false)]
    private Recipe $recipe;

    #[ORM\ManyToOne(targetEntity: Ingredient::class)]
    #[ORM\JoinColumn(nullable: false)]
    private Ingredient $ingredient;

    #[ORM\Column(type: "float")]
    private float $quantity;

    public function getId(): ?int { return $this->id; }

    public function getRecipe(): Recipe { return $this->recipe; }
    public function setRecipe(Recipe $recipe): self { $this->recipe = $recipe; return $this; }

    public function getIngredient(): Ingredient { return $this->ingredient; }
    public function setIngredient(Ingredient $ingredient): self { $this->ingredient = $ingredient; return $this; }

    public function getQuantity(): float { return $this->quantity; }
    public function setQuantity(float $quantity): self { $this->quantity = $quantity; return $this; }
}
