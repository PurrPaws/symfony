<?php

namespace App\Entity;

use App\Repository\FillDataRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FillDataRepository::class)]
class FillData
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $amount = null;

    #[ORM\Column]
    private ?int $date = null;

    #[ORM\Column]
    private ?bool $state = null;

    #[ORM\ManyToOne(inversedBy: 'fillData')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ObjectIot $objectIot = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getDate(): ?int
    {
        return $this->date;
    }

    public function setDate(int $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function isState(): ?bool
    {
        return $this->state;
    }

    public function setState(bool $state): static
    {
        $this->state = $state;

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
