<?php

namespace App\Entity;

use App\Repository\ObjectIotRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObjectIotRepository::class)]
class ObjectIot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 25, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 15)]
    private ?string $type = null;

    #[ORM\OneToMany(mappedBy: 'objectIot', targetEntity: FillData::class)]
    private Collection $fillData;

    #[ORM\OneToMany(mappedBy: 'objectIot', targetEntity: Interaction::class)]
    private Collection $interactions;

    #[ORM\ManyToOne(inversedBy: 'objectIots')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function __construct()
    {
        $this->fillData = new ArrayCollection();
        $this->interactions = new ArrayCollection();
    }

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, FillData>
     */
    public function getFillData(): Collection
    {
        return $this->fillData;
    }

    public function addFillData(FillData $fillData): static
    {
        if (!$this->fillData->contains($fillData)) {
            $this->fillData->add($fillData);
            $fillData->setObjectIot($this);
        }

        return $this;
    }

    public function removeFillData(FillData $fillData): static
    {
        if ($this->fillData->removeElement($fillData)) {
            // set the owning side to null (unless already changed)
            if ($fillData->getObjectIot() === $this) {
                $fillData->setObjectIot(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Interaction>
     */
    public function getInteractions(): Collection
    {
        return $this->interactions;
    }

    public function addInteraction(Interaction $interaction): static
    {
        if (!$this->interactions->contains($interaction)) {
            $this->interactions->add($interaction);
            $interaction->setObjectIot($this);
        }

        return $this;
    }

    public function removeInteraction(Interaction $interaction): static
    {
        if ($this->interactions->removeElement($interaction)) {
            // set the owning side to null (unless already changed)
            if ($interaction->getObjectIot() === $this) {
                $interaction->setObjectIot(null);
            }
        }

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
