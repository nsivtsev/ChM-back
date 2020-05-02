<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\FeedbackRepository")
 */
class Feedback
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=512)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=18, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $assortment;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $processingTime;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $paymentConditions;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $delivery;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $appearance;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $quality;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $message;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAssortment(): ?int
    {
        return $this->assortment;
    }

    public function setAssortment(?int $assortment): self
    {
        $this->assortment = $assortment;

        return $this;
    }

    public function getProcessingTime(): ?int
    {
        return $this->processingTime;
    }

    public function setProcessingTime(?int $processingTime): self
    {
        $this->processingTime = $processingTime;

        return $this;
    }

    public function getPaymentConditions(): ?int
    {
        return $this->paymentConditions;
    }

    public function setPaymentConditions(?int $paymentConditions): self
    {
        $this->paymentConditions = $paymentConditions;

        return $this;
    }

    public function getDelivery(): ?int
    {
        return $this->delivery;
    }

    public function setDelivery(?int $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getAppearance(): ?int
    {
        return $this->appearance;
    }

    public function setAppearance(?int $appearance): self
    {
        $this->appearance = $appearance;

        return $this;
    }

    public function getQuality(): ?int
    {
        return $this->quality;
    }

    public function setQuality(?int $quality): self
    {
        $this->quality = $quality;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
