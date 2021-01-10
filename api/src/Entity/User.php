<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
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
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity=CampCollaboration::class, mappedBy="user", orphanRemoval=true)
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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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
            $campCollaboration->setUser($this);
        }

        return $this;
    }

    public function removeCampCollaboration(CampCollaboration $campCollaboration): self
    {
        if ($this->campCollaborations->removeElement($campCollaboration)) {
            // set the owning side to null (unless already changed)
            if ($campCollaboration->getUser() === $this) {
                $campCollaboration->setUser(null);
            }
        }

        return $this;
    }
}
