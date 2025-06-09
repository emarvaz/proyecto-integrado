<?php

namespace App\Entity;

use App\Repository\AbilityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AbilityRepository::class)]
class Ability
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['ability:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Groups(['card:read', 'ability:read, ability:write'])]
    #[Assert\NotBlank(message: 'El nombre de la habilidad no puede estar vacío.')]
    #[Assert\Length(
        min: 3,
        max: 50,
        minMessage: 'El nombre debe tener al menos {{ limit }} caracteres.',
        maxMessage: 'El nombre no puede tener más de {{ limit }} caracteres.'
    )]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    #[Groups(['ability:read, ability:write'])]
    #[Assert\NotBlank(message: 'La descripción no puede estar vacía.')]
    #[Assert\Length(
        min: 10,
        max: 255,
        minMessage: 'La descripción debe tener al menos {{ limit }} caracteres.',
        maxMessage: 'La descripción no puede superar los {{ limit }} caracteres.'
    )]
    private ?string $description = null;

    #[ORM\Column]
    #[Groups(['ability:read, ability:write'])]
    #[Assert\NotNull(message: 'Debes especificar un coste.')]
    #[Assert\Type(type: 'integer', message: 'El coste debe ser un número.')]
    #[Assert\PositiveOrZero(message: 'El coste no puede ser un número negativo.')]
    private ?int $cost = null;

    #[ORM\Column]
    #[Groups(['ability:read, ability:write'])]
    #[Assert\NotNull(message: 'Debes especificar un valor.')]
    #[Assert\Type(type: 'integer', message: 'El valor debe ser un número.')]
    private ?int $value = null;

    #[ORM\ManyToOne(inversedBy: 'abilities')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['ability:read, ability:write'])]
    #[Assert\NotNull(message: 'Debes seleccionar una categoría.')]
    private ?AbilityCategory $category = null;

    /**
     * @var Collection<int, Card>
     */
    #[ORM\ManyToMany(targetEntity: Card::class, mappedBy: 'abilities')]
    private Collection $cards;

    public function __construct()
    {
        $this->cards = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCost(): ?int
    {
        return $this->cost;
    }

    public function setCost(int $cost): static
    {
        $this->cost = $cost;

        return $this;
    }

    public function getCategory(): ?AbilityCategory
    {
        return $this->category;
    }

    public function setCategory(?AbilityCategory $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(?int $value): void
    {
        $this->value = $value;
    }

    /**
     * @return Collection<int, Card>
     */
    public function getCards(): Collection
    {
        return $this->cards;
    }

    public function addCard(Card $card): static
    {
        if (!$this->cards->contains($card)) {
            $this->cards->add($card);
            $card->addAbility($this);
        }

        return $this;
    }

    public function removeCard(Card $card): static
    {
        if ($this->cards->removeElement($card)) {
            $card->removeAbility($this);
        }

        return $this;
    }
}
