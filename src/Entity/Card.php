<?php

namespace App\Entity;

use App\Repository\CardRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: CardRepository::class)]
#[UniqueEntity(
    fields: ['name'],
    message: 'Ya existe una carta con este nombre. Por favor, elige otro.'
)]
class Card
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['card:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Groups(['card:read', 'card:write'])]
    #[Assert\NotBlank(message: 'El nombre de la carta no puede estar vacío.')]
    #[Assert\Length(
        min: 3,
        max: 50,
        minMessage: 'El nombre debe tener al menos {{ limit }} caracteres.',
        maxMessage: 'El nombre no puede tener más de {{ limit }} caracteres.'
    )]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['card:read', 'card:write'])]
    #[Assert\Length(max: 255, maxMessage: 'La ruta de la imagen no puede superar los {{ limit }} caracteres.')]
    private ?string $image = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['card:read', 'card:write'])]
    #[Assert\Length(
        min: 10,
        max: 1000,
        minMessage: 'Si se incluye una descripción, debe tener al menos {{ limit }} caracteres.',
        maxMessage: 'La descripción no puede superar los {{ limit }} caracteres.'
    )]
    private ?string $description = null;

    #[ORM\Column]
    #[Groups(['card:read', 'card:write'])]
    #[Assert\NotNull(message: 'La salud de la carta no puede estar vacía.')]
    #[Assert\Type(type: 'integer', message: 'La salud debe ser un número entero.')]
    #[Assert\Positive(message: 'La salud debe ser un número positivo mayor que cero.')]
    private ?int $health = null;

    /**
     * @var Collection<int, Ability>
     */
    #[ORM\ManyToMany(targetEntity: Ability::class, inversedBy: 'cards')]
    #[ORM\JoinTable(name: 'card_ability')]
    #[Groups(['card:read', 'card:write'])]
    #[Assert\Count(
        max: 2,
        maxMessage: "No puedes seleccionar más de {{ limit }} habilidades."
    )]
    private Collection $abilities;

    /**
     * @var Collection<int, CardDeck>
     */
    #[ORM\ManyToMany(targetEntity: CardDeck::class, mappedBy: 'cards')]
    private Collection $cardDecks;

    public function __construct()
    {
        $this->abilities = new ArrayCollection();
        $this->cardDecks = new ArrayCollection();
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    public function setDescription(?string $description): static
    {
        $this->description = $description;
        
        return $this;
    }
    
    public function getHealth(): ?int
    {
        return $this->health;
    }
    
    public function setHealth(int $health): static
    {
        $this->health = $health;
        
        return $this;
    }

    public function setAbilities(Collection $abilities): void
    {
        $this->abilities = $abilities;
    }

    /**
     * @return Collection<int, Ability>
     */
    public function getAbilities(): Collection
    {
        return $this->abilities;
    }

    public function addAbility(Ability $ability): static
    {
        if (!$this->abilities->contains($ability)) {
            $this->abilities->add($ability);
        }

        return $this;
    }

    public function removeAbility(Ability $ability): static
    {
        $this->abilities->removeElement($ability);

        return $this;
    }

    /**
     * @return Collection<int, CardDeck>
     */
    public function getCardDecks(): Collection
    {
        return $this->cardDecks;
    }

    public function addCardDeck(CardDeck $cardDeck): static
    {
        if (!$this->cardDecks->contains($cardDeck)) {
            $this->cardDecks->add($cardDeck);
            $cardDeck->addCard($this);
        }

        return $this;
    }

    public function removeCardDeck(CardDeck $cardDeck): static
    {
        if ($this->cardDecks->removeElement($cardDeck)) {
            $cardDeck->removeCard($this);
        }

        return $this;
    }
}
