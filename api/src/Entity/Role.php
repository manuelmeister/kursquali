<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RoleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=RoleRepository::class)
 */
class Role
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=CampCollaboration::class, mappedBy="role")
     */
    private $campCollaborations;

    public function __construct()
    {
        $this->campCollaborations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|CampCollaboration[]
     */
    public function getCampCollaborations(): Collection
    {
        return $this->campCollaborations;
    }

    public function addCampCollaboration(CampCollaboration $campCollaboration): self
    {
        if (!$this->campCollaborations->contains($campCollaboration)) {
            $this->campCollaborations[] = $campCollaboration;
            $campCollaboration->setRole($this);
        }

        return $this;
    }

    public function removeCampCollaboration(CampCollaboration $campCollaboration): self
    {
        if ($this->campCollaborations->removeElement($campCollaboration)) {
            // set the owning side to null (unless already changed)
            if ($campCollaboration->getRole() === $this) {
                $campCollaboration->setRole(null);
            }
        }

        return $this;
    }
}
