<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAffiliate
 *
 * @ORM\Table(name="user_affiliate", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="status", columns={"status"}), @ORM\Index(name="referer_id", columns={"referer_id"}), @ORM\Index(name="date_created", columns={"date_created"})})
 * @ORM\Entity
 */
class UserAffiliate
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
     * @var int
     *
     * @ORM\Column(name="referer_id", type="integer", nullable=false)
     */
    private $refererId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateCreated = 'CURRENT_TIMESTAMP';

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set refererId.
     *
     * @param int $refererId
     *
     * @return UserAffiliate
     */
    public function setRefererId($refererId)
    {
        $this->refererId = $refererId;

        return $this;
    }

    /**
     * Get refererId.
     *
     * @return int
     */
    public function getRefererId()
    {
        return $this->refererId;
    }

    /**
     * Set dateCreated.
     *
     * @param \DateTime $dateCreated
     *
     * @return UserAffiliate
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
     * Set status.
     *
     * @param bool $status
     *
     * @return UserAffiliate
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set user.
     *
     * @param \App\Models\Entity\User|null $user
     *
     * @return UserAffiliate
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
}
