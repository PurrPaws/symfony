<?php

namespace App\Entity;

use App\Repository\InteractionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(mappedBy: 'interaction', targetEntity: RefillInteraction::class)]
    private Collection $refillInteractions;

    #[ORM\OneToMany(mappedBy: 'interaction', targetEntity: DoorInteraction::class)]
    private Collection $doorInteractions;

    #[ORM\OneToMany(mappedBy: 'interaction', targetEntity: ServingInteraction::class)]
    private Collection $servingInteractions;

    #[ORM\OneToMany(mappedBy: 'interaction', targetEntity: TankInteraction::class)]
    private Collection $tankInteractions;

    #[ORM\ManyToOne(inversedBy: 'interactions')]
    private ?ObjectIot $objectIot = null;

    public function __construct()
    {
        $this->refillInteractions = new ArrayCollection();
        $this->doorInteractions = new ArrayCollection();
        $this->servingInteractions = new ArrayCollection();
        $this->tankInteractions = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, RefillInteraction>
     */
    public function getRefillInteractions(): Collection
    {
        return $this->refillInteractions;
    }

    public function addRefillInteraction(RefillInteraction $refillInteraction): static
    {
        if (!$this->refillInteractions->contains($refillInteraction)) {
            $this->refillInteractions->add($refillInteraction);
            $refillInteraction->setInteraction($this);
        }

        return $this;
    }

    public function removeRefillInteraction(RefillInteraction $refillInteraction): static
    {
        if ($this->refillInteractions->removeElement($refillInteraction)) {
            // set the owning side to null (unless already changed)
            if ($refillInteraction->getInteraction() === $this) {
                $refillInteraction->setInteraction(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, DoorInteraction>
     */
    public function getDoorInteractions(): Collection
    {
        return $this->doorInteractions;
    }

    public function addDoorInteraction(DoorInteraction $doorInteraction): static
    {
        if (!$this->doorInteractions->contains($doorInteraction)) {
            $this->doorInteractions->add($doorInteraction);
            $doorInteraction->setInteraction($this);
        }

        return $this;
    }

    public function removeDoorInteraction(DoorInteraction $doorInteraction): static
    {
        if ($this->doorInteractions->removeElement($doorInteraction)) {
            // set the owning side to null (unless already changed)
            if ($doorInteraction->getInteraction() === $this) {
                $doorInteraction->setInteraction(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ServingInteraction>
     */
    public function getServingInteractions(): Collection
    {
        return $this->servingInteractions;
    }

    public function addServingInteraction(ServingInteraction $servingInteraction): static
    {
        if (!$this->servingInteractions->contains($servingInteraction)) {
            $this->servingInteractions->add($servingInteraction);
            $servingInteraction->setInteraction($this);
        }

        return $this;
    }

    public function removeServingInteraction(ServingInteraction $servingInteraction): static
    {
        if ($this->servingInteractions->removeElement($servingInteraction)) {
            // set the owning side to null (unless already changed)
            if ($servingInteraction->getInteraction() === $this) {
                $servingInteraction->setInteraction(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TankInteraction>
     */
    public function getTankInteractions(): Collection
    {
        return $this->tankInteractions;
    }

    public function addTankInteraction(TankInteraction $tankInteraction): static
    {
        if (!$this->tankInteractions->contains($tankInteraction)) {
            $this->tankInteractions->add($tankInteraction);
            $tankInteraction->setInteraction($this);
        }

        return $this;
    }

    public function removeTankInteraction(TankInteraction $tankInteraction): static
    {
        if ($this->tankInteractions->removeElement($tankInteraction)) {
            // set the owning side to null (unless already changed)
            if ($tankInteraction->getInteraction() === $this) {
                $tankInteraction->setInteraction(null);
            }
        }

        return $this;
    }

    public function getObjectIot(): ?ObjectIot
    {
        return $this->objectIot;
    }

    public function setObjectIot(?ObjectIot $objectIot): static
    {
        $this->objectIot = $objectIot;

        return $this;
    }
}
