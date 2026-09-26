<?php

namespace App\Entity;

use App\Repository\RegionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RegionRepository::class)]
class Region
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    /**
     * @var Collection<int, Identity>
     */
    #[ORM\OneToMany(targetEntity: Identity::class, mappedBy: 'region')]
    private Collection $identities;

    public function __construct()
    {
        $this->identities = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Identity>
     */
    public function getIdentities(): Collection
    {
        return $this->identities;
    }

    public function addIdentity(Identity $identity): static
    {
        if (!$this->identities->contains($identity)) {
            $this->identities->add($identity);
            $identity->setRegion($this);
        }

        return $this;
    }

    public function removeIdentity(Identity $identity): static
    {
        if ($this->identities->removeElement($identity)) {
            // set the owning side to null (unless already changed)
            if ($identity->getRegion() === $this) {
                $identity->setRegion(null);
            }
        }

        return $this;
    }
}
