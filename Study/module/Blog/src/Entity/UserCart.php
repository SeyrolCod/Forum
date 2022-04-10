<?php

namespace Blog\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="user_cart")
 * @ORM\Entity
 */

class UserCart {

    /** @var integer
     * @ORM\Column(name="id", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var integer
     * @ORM\Column (type="integer")
     */
    private $company;
    /**
     * @ORM\Column (type="string")
     */
    private $products;
    /**
     * @var integer
     * @ORM\Column (type="integer")
     */
    private $userDeliveryAddress;
    /**
     * @var integer
     * @ORM\Column (type="integer")
     */
    private $pickupCity;
    /**
     * @var integer
     * @ORM\Column (type="integer")
     */
    private $pickup;
    /**
     * @var integer
     * @ORM\Column (type="integer")
     */
    private $paymentTypeOptions;
    /**
     * @var integer
     * @ORM\Column (type="string")
     */
    private $deliveryPrice;
    /**
     * @var string
     * @ORM\Column (type="string")
     */
    private $deliveryPriceMe;
    /**
     * @var integer
     * @ORM\Column (type="integer")
     */
    private $marketplaceId;
    /**
     * @var integer
     * @ORM\Column (type="string")
     */
    private $creditCardId;
    /**
     * @var integer
     * @ORM\Column (type="string")
     */
    private $deliveryTime;
    /**
     * @var integer
     * @ORM\Column (type="integer")
     */
    private $deliveryType;
    /**
     * @var string
     * @ORM\Column (type="string")
     */
    private $deliveryDate;
    /**
     * @var integer
     * @ORM\Column (type="integer", name="yandexid")
     */
    private $yandexId;

    /**
     * @return int
     */
    public function getCompany(): int
    {
        return $this->company;
    }

    /**
     * @param int $company
     * @return UserCart
     */
    public function setCompany(int $company): UserCart
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param mixed $products
     * @return UserCart
     */
    public function setProducts($products)
    {
        $this->products = $products;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserDeliveryAddress(): int
    {
        return $this->userDeliveryAddress;
    }

    /**
     * @param int $userDeliveryAddress
     * @return UserCart
     */
    public function setUserDeliveryAddress(int $userDeliveryAddress): UserCart
    {
        $this->userDeliveryAddress = $userDeliveryAddress;
        return $this;
    }

    /**
     * @return int
     */
    public function getPickupCity(): int
    {
        return $this->pickupCity;
    }

    /**
     * @param int $pickupCity
     * @return UserCart
     */
    public function setPickupCity(int $pickupCity): UserCart
    {
        $this->pickupCity = $pickupCity;
        return $this;
    }

    /**
     * @return int
     */
    public function getPickup(): int
    {
        return $this->pickup;
    }

    /**
     * @param int $pickup
     * @return UserCart
     */
    public function setPickup(int $pickup): UserCart
    {
        $this->pickup = $pickup;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentTypeOptions(): int
    {
        return $this->paymentTypeOptions;
    }

    /**
     * @param int $paymentTypeOptions
     * @return UserCart
     */
    public function setPaymentTypeOptions(int $paymentTypeOptions): UserCart
    {
        $this->paymentTypeOptions = $paymentTypeOptions;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryPrice(): int
    {
        return $this->deliveryPrice;
    }

    /**
     * @param int $deliveryPrice
     * @return UserCart
     */
    public function setDeliveryPrice(int $deliveryPrice): UserCart
    {
        $this->deliveryPrice = $deliveryPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryPriceMe(): int
    {
        return $this->deliveryPriceMe;
    }

    /**
     * @param int $deliveryPriceMe
     * @return UserCart
     */
    public function setDeliveryPriceMe(int $deliveryPriceMe): UserCart
    {
        $this->deliveryPriceMe = $deliveryPriceMe;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarketplaceId(): int
    {
        return $this->marketplaceId;
    }

    /**
     * @param int $marketplaceId
     * @return UserCart
     */
    public function setMarketplaceId(int $marketplaceId): UserCart
    {
        $this->marketplaceId = $marketplaceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreditCardId(): int
    {
        return $this->creditCardId;
    }

    /**
     * @param int $creditCardId
     * @return UserCart
     */
    public function setCreditCardId(int $creditCardId): UserCart
    {
        $this->creditCardId = $creditCardId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryTime(): int
    {
        return $this->deliveryTime;
    }

    /**
     * @param int $deliveryTime
     * @return UserCart
     */
    public function setDeliveryTime(int $deliveryTime): UserCart
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryType(): int
    {
        return $this->deliveryType;
    }

    /**
     * @param int $deliveryType
     * @return UserCart
     */
    public function setDeliveryType(int $deliveryType): UserCart
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryDate(): int
    {
        return $this->deliveryDate;
    }

    /**
     * @param int $deliveryDate
     * @return UserCart
     */
    public function setDeliveryDate(int $deliveryDate): UserCart
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getYandexId(): int
    {
        return $this->yandexId;
    }

    /**
     * @param int $yandexId
     * @return UserCart
     */
    public function setYandexId(int $yandexId): UserCart
    {
        $this->yandexId = $yandexId;
        return $this;
    }





}