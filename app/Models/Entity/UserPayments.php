<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserPayments
 *
 * @ORM\Table(name="user_payments", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="social_network_plan_id", columns={"social_network_plan_id"})})
 * @ORM\Entity
 */
class UserPayments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=50, nullable=false)
     */
    private $method;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_id", type="string", length=255, nullable=false)
     */
    private $paymentId;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_code", type="string", length=5, nullable=false)
     */
    private $currencyCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payer_email", type="string", length=255, nullable=true)
     */
    private $payerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_status", type="string", length=255, nullable=false)
     */
    private $paymentStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateCreated = 'CURRENT_TIMESTAMP';

    /**
     * @var \App\Models\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \App\Models\Entity\SocialNetworkPlan
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entity\SocialNetworkPlan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="social_network_plan_id", referencedColumnName="id")
     * })
     */
    private $socialNetworkPlan;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set method.
     *
     * @param string $method
     *
     * @return UserPayments
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method.
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set paymentId.
     *
     * @param string $paymentId
     *
     * @return UserPayments
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;

        return $this;
    }

    /**
     * Get paymentId.
     *
     * @return string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * Set price.
     *
     * @param string $price
     *
     * @return UserPayments
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set currencyCode.
     *
     * @param string $currencyCode
     *
     * @return UserPayments
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get currencyCode.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set payerEmail.
     *
     * @param string|null $payerEmail
     *
     * @return UserPayments
     */
    public function setPayerEmail($payerEmail = null)
    {
        $this->payerEmail = $payerEmail;

        return $this;
    }

    /**
     * Get payerEmail.
     *
     * @return string|null
     */
    public function getPayerEmail()
    {
        return $this->payerEmail;
    }

    /**
     * Set paymentStatus.
     *
     * @param string $paymentStatus
     *
     * @return UserPayments
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * Get paymentStatus.
     *
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Set dateCreated.
     *
     * @param \DateTime $dateCreated
     *
     * @return UserPayments
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated.
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set user.
     *
     * @param \App\Models\Entity\User|null $user
     *
     * @return UserPayments
     */
    public function setUser(\App\Models\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \App\Models\Entity\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set socialNetworkPlan.
     *
     * @param \App\Models\Entity\SocialNetworkPlan|null $socialNetworkPlan
     *
     * @return UserPayments
     */
    public function setSocialNetworkPlan(\App\Models\Entity\SocialNetworkPlan $socialNetworkPlan = null)
    {
        $this->socialNetworkPlan = $socialNetworkPlan;

        return $this;
    }

    /**
     * Get socialNetworkPlan.
     *
     * @return \App\Models\Entity\SocialNetworkPlan|null
     */
    public function getSocialNetworkPlan()
    {
        return $this->socialNetworkPlan;
    }
}
