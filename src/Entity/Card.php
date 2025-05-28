<?php

namespace App\Entity;

use App\Repository\CardRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CardRepository::class)]
class Card
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $health = null;

    /**
     * @var Collection<int, Ability>
     */
    #[ORM\ManyToMany(targetEntity: Ability::class, inversedBy: 'cards')]
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
