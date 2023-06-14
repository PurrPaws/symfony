<?php

namespace App\Entity;

use App\Repository\TankInteractionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TankInteractionRepository::class)]
class TankInteraction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $tankState = null;

    #[ORM\ManyToOne(inversedBy: 'tankInteractions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Interaction $interaction = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isTankState(): ?bool
    {
        return $this->tankState;
    }

    public function setTankState(bool $tankState): static
    {
        $this->tankState = $tankState;

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
