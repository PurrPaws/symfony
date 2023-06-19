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

    #[ORM\ManyToOne(inversedBy: 'interactions')]
    private ?ObjectIot $objectIot = null;

    public function __construct()
    {
    }

    public function getId(): ?int
    {
        return $this->id;
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
