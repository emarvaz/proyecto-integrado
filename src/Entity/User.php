<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['username'], message: 'Este nombre de usuario ya está en uso.')]
#[UniqueEntity(fields: ['email'], message: 'Este email ya está registrado.')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 25, unique: true)]
    #[Assert\NotBlank(message: 'El nombre de usuario es obligatorio.')]
    #[Assert\Length(
        min: 3,
        max: 25,
        minMessage: 'El nombre de usuario debe tener al menos {{ limit }} caracteres.',
        maxMessage: 'El nombre de usuario no puede superar los {{ limit }} caracteres.'
    )]
    private ?string $username = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\NotBlank(message: 'El email es obligatorio.')]
    #[Assert\Email(message: 'El formato del email no es válido.')]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(groups: ['registration'], message: 'La contraseña es obligatoria.')]
    #[Assert\Length(
        min: 8,
        minMessage: 'La contraseña debe tener al menos {{ limit }} caracteres.',
        groups: ['registration']
    )]
    #[Assert\Regex(
        pattern: "/(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&^._-])/",
        message: "La contraseña debe contener al menos una letra, un número y un carácter especial (@$!%*#?&^._-).",
        groups: ['registration']
    )]
    private ?string $password = null;

    #[ORM\Column(length: 25, nullable: true)]
    #[Assert\Length(max: 25, maxMessage: 'El nombre no puede superar los {{ limit }} caracteres.')]
    private ?string $name = null;

    #[ORM\Column(length: 60, nullable: true)]
    #[Assert\Length(max: 60, maxMessage: 'Los apellidos no pueden superar los {{ limit }} caracteres.')]
    private ?string $lastname = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max: 255)]
    private ?string $profilePic = null;

    public function getProfilePic(): ?string
    {
        return $this->profilePic;
    }

    public function setProfilePic(?string $profilePic): void
    {
        $this->profilePic = $profilePic;
    }

    #[ORM\Column(type: 'json')]
    private ?array $roles = [];

    /**
     * @var Collection<int, CardDeck>
     */
    #[ORM\OneToMany(targetEntity: CardDeck::class, mappedBy: 'user', cascade: ['persist'], orphanRemoval: true)]
    private Collection $cardDecks;

    #[ORM\Column]
    private ?\DateTime $registerDate = null;

    public function __construct()
    {
        $this->cardDecks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(?array $roles): void
    {
        if (empty($roles)) {
            $roles = ['ROLE_USER'];
        }

        $this->roles = $roles;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function eraseCredentials(): void
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getUserIdentifier(): string
    {
        return $this->getUsername();
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
            $cardDeck->setUser($this);
        }

        return $this;
    }

    public function removeCardDeck(CardDeck $cardDeck): static
    {
        if ($this->cardDecks->removeElement($cardDeck)) {
            if ($cardDeck->getUser() === $this) {
                $cardDeck->setUser(null);
            }
        }

        return $this;
    }

    public function getRegisterDate(): ?\DateTime
    {
        return $this->registerDate;
    }

    public function setRegisterDate(\DateTime $registerDate): static
    {
        $this->registerDate = $registerDate;

        return $this;
    }
}
