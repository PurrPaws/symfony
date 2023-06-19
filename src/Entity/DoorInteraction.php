<?php

namespace App\Entity;

use App\Repository\DoorInteractionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DoorInteractionRepository::class)]
class DoorInteraction extends Interaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $doorState = null;

    #[ORM\ManyToOne(inversedBy: 'doorInteractions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Interaction $interaction = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isDoorState(): ?bool
    {
        return $this->doorState;
    }

    public function setDoorState(bool $doorState): static
    {
        $this->doorState = $doorState;

        return $this;
    }

    public function getInteraction(): ?Interaction
    {
        return $this->interaction;
    }

    public function setInteraction(?Interaction $interaction): static
    {
        $this->interaction = $interaction;

        return $this;
    }
}
