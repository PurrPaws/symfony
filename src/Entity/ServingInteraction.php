<?php

namespace App\Entity;

use App\Repository\ServingInteractionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServingInteractionRepository::class)]
class ServingInteraction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $postAmountChange = null;

    #[ORM\ManyToOne(inversedBy: 'servingInteractions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Interaction $interaction = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPostAmountChange(): ?int
    {
        return $this->postAmountChange;
    }

    public function setPostAmountChange(int $postAmountChange): static
    {
        $this->postAmountChange = $postAmountChange;

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
