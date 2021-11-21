<?php

namespace App\Entity;

use App\Repository\UsageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsageRepository::class)
 */
class Usage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $time_created;

    /**
     * @ORM\ManyToOne(targetEntity=House::class, inversedBy="usages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $house;

    /**
     * @ORM\ManyToOne(targetEntity=Device::class, inversedBy="usages")
     */
    private $device;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $consumption;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTimeCreated(): ?\DateTimeInterface
    {
        return $this->time_created;
    }

    public function setTimeCreated(\DateTimeInterface $time_created): self
    {
        $this->time_created = $time_created;

        return $this;
    }

    public function getHouse(): ?House
    {
        return $this->house;
    }

    public function setHouse(?House $house): self
    {
        $this->house = $house;

        return $this;
    }

    public function getDevice(): ?Device
    {
        return $this->device;
    }

    public function setDevice(?Device $device): self
    {
        $this->device = $device;

        return $this;
    }

    public function getConsumption(): ?string
    {
        return $this->consumption;
    }

    public function setConsumption(string $consumption): self
    {
        $this->consumption = $consumption;

        return $this;
    }
}
