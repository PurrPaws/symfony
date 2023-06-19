<?php

namespace App\Entity;

use App\Repository\RefillInteractionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RefillInteractionRepository::class)]
class RefillInteraction extends Interaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $refillAmountSave = null;

    #[ORM\ManyToOne(inversedBy: 'refillInteractions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Interaction $interaction = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRefillAmountSave(): ?int
    {
        return $this->refillAmountSave;
    }

    public function setRefillAmountSave(int $refillAmountSave): static
    {
        $this->refillAmountSave = $refillAmountSave;

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
