<?php

namespace App\Entity;

use App\Repository\PetRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PetRepository::class)]
class Pet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 35, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $birthDate = null;

    #[ORM\Column(length: 35, nullable: true)]
    private ?string $breed = null;

    #[ORM\Column(nullable: true)]
    private ?bool $gender = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $imageId = null;

    #[ORM\Column(length: 64)]
    private ?string $chipId = null;

    #[ORM\ManyToOne(inversedBy: 'pets')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    public function setBirthDate(?string $birthDate): static
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getBreed(): ?string
    {
        return $this->breed;
    }

    public function setBreed(?string $breed): static
    {
        $this->breed = $breed;

        return $this;
    }

    public function isGender(): ?bool
    {
        return $this->gender;
    }

    public function setGender(?bool $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getImageId(): ?string
    {
        return $this->imageId;
    }

    public function setImageId(?string $imageId): static
    {
        $this->imageId = $imageId;

        return $this;
    }

    public function getChipId(): ?string
    {
        return $this->chipId;
    }

    public function setChipId(string $chipId): static
    {
        $this->chipId = $chipId;

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
}
