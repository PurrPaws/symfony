<?php

namespace App\Entity;

use App\Repository\InteractionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InteractionRepository::class)]
class Interaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $interactionDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInteractionDate(): ?\DateTimeInterface
    {
        return $this->interactionDate;
    }

    public function setInteractionDate(\DateTimeInterface $interactionDate): static
    {
        $this->interactionDate = $interactionDate;

        return $this;
    }
}
