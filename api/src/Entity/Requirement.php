<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RequirementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=RequirementRepository::class)
 */
class Requirement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @ORM\ManyToOne(targetEntity=Requirement::class, inversedBy="subRequirement")
     */
    private $parentRequirement;

    /**
     * @ORM\OneToMany(targetEntity=Requirement::class, mappedBy="parentRequirement")
     */
    private $subRequirement;

    public function __construct()
    {
        $this->subrequirements = new ArrayCollection();
        $this->subRequirement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getParentRequirement(): ?self
    {
        return $this->parentRequirement;
    }

    public function setParentRequirement(?self $parentRequirement): self
    {
        $this->parentRequirement = $parentRequirement;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getSubRequirement(): Collection
    {
        return $this->subRequirement;
    }

    public function addSubRequirement(self $subRequirement): self
    {
        if (!$this->subRequirement->contains($subRequirement)) {
            $this->subRequirement[] = $subRequirement;
            $subRequirement->setParentRequirement($this);
        }

        return $this;
    }

    public function removeSubRequirement(self $subRequirement): self
    {
        if ($this->subRequirement->removeElement($subRequirement)) {
            // set the owning side to null (unless already changed)
            if ($subRequirement->getParentRequirement() === $this) {
                $subRequirement->setParentRequirement(null);
            }
        }

        return $this;
    }
}
