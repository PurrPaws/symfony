<?php

namespace App\Entity;

use App\Repository\DoorInteractionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DoorInteractionRepository::class)]
class DoorInteraction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $doorState = null;

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
}
