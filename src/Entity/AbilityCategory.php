<?php

namespace App\Entity;

use App\Repository\AbilityCategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: AbilityCategoryRepository::class)]
#[UniqueEntity(
    fields: ['name'],
    message: 'Ya existe una categoría con este nombre. Por favor, elige otro.'
)]
class AbilityCategory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['abilityCategory:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Groups(['ability:read', 'abilityCategory:read, abilityCategory:write'])]
    #[Assert\NotBlank(message: 'El nombre de la categoría no puede estar vacío.')]
    #[Assert\Length(
        min: 3,
        max: 50,
        minMessage: 'El nombre debe tener al menos {{ limit }} caracteres.',
        maxMessage: 'El nombre no puede tener más de {{ limit }} caracteres.'
    )]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['abilityCategory:read, abilityCategory:write'])]
    #[Assert\Length(
        min: 10,
        max: 1000,
        minMessage: 'Si se incluye una descripción, debe tener al menos {{ limit }} caracteres.',
        maxMessage: 'La descripción no puede superar los {{ limit }} caracteres.'
    )]
    private ?string $description = null;

    /**
     * @var Collection<int, Ability>
     */
    #[ORM\OneToMany(targetEntity: Ability::class, mappedBy: 'category')]
    private Collection $abilities;

    public function __construct()
    {
        $this->abilities = new ArrayCollection();
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
            $ability->setCategory($this);
        }

        return $this;
    }

    public function removeAbility(Ability $ability): static
    {
        if ($this->abilities->removeElement($ability)) {
            if ($ability->getCategory() === $this) {
                $ability->setCategory(null);
            }
        }

        return $this;
    }
}
