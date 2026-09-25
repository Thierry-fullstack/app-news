<?php

namespace App\Entity;

use App\Repository\CivilityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CivilityRepository::class)]
class Civility
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $gender = null;

    /**
     * @var Collection<int, Identity>
     */
    #[ORM\OneToMany(targetEntity: Identity::class, mappedBy: 'civility')]
    private Collection $identities;

    public function __construct()
    {
        $this->identities = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): static
    {
        $this->gender = $gender;

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
            $identity->setCivility($this);
        }

        return $this;
    }

    public function removeIdentity(Identity $identity): static
    {
        if ($this->identities->removeElement($identity)) {
            // set the owning side to null (unless already changed)
            if ($identity->getCivility() === $this) {
                $identity->setCivility(null);
            }
        }

        return $this;
    }
}
