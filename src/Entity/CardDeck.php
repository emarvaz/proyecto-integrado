<?php

namespace App\Entity;

use App\Repository\CardDeckRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CardDeckRepository::class)]
#[UniqueEntity(
    fields: ['name', 'user'],
    message: 'Ya tienes un mazo con este nombre. Por favor, elige otro.'
)]
class CardDeck
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Groups(['card:read'])]
    #[Assert\NotBlank(message: 'El nombre del mazo no puede estar vacío.')]
    #[Assert\Length(
        min: 3,
        max: 100,
        minMessage: 'El nombre del mazo debe tener al menos {{ limit }} caracteres.',
        maxMessage: 'El nombre del mazo no puede superar los {{ limit }} caracteres.'
    )]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'cardDecks')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'El mazo debe estar asociado a un usuario.')]
    private ?User $user = null;

    /**
     * @var Collection<int, Card>
     */
    #[ORM\ManyToMany(targetEntity: Card::class, inversedBy: 'cardDecks')]
    #[Assert\Count(
        max: 8,
        maxMessage: 'El mazo no puede contener más de {{ limit }} cartas.'
    )]
    private Collection $cards;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\Type('bool')]
    private ?bool $isFavorite = false;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
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
        }

        return $this;
    }

    public function removeCard(Card $card): static
    {
        $this->cards->removeElement($card);

        return $this;
    }

    public function clearCards(): self
    {
        $this->cards->clear();
        return $this;
    }


    public function isFavorite(): ?bool
    {
        return $this->isFavorite;
    }

    public function setIsFavorite(bool $isFavorite): static
    {
        $this->isFavorite = $isFavorite;

        return $this;
    }
}
