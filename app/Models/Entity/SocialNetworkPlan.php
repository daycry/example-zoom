<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocialNetworkPlan
 *
 * @ORM\Table(name="social_network_plan", indexes={@ORM\Index(name="social_network_id", columns={"social_network_id"}), @ORM\Index(name="active", columns={"active"})})
 * @ORM\Entity
 */
class SocialNetworkPlan
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="duration", type="string", length=50, nullable=false)
     */
    private $duration;

    /**
     * @var bool
     *
     * @ORM\Column(name="offer", type="boolean", nullable=false)
     */
    private $offer = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="permit_likes", type="boolean", nullable=false, options={"default"="1"})
     */
    private $permitLikes = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="permit_shares", type="boolean", nullable=false, options={"default"="1"})
     */
    private $permitShares = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="permit_follows", type="boolean", nullable=false, options={"default"="1"})
     */
    private $permitFollows = true;

    /**
     * @var int
     *
     * @ORM\Column(name="likes", type="integer", nullable=false)
     */
    private $likes;

    /**
     * @var int
     *
     * @ORM\Column(name="shares", type="integer", nullable=false)
     */
    private $shares;

    /**
     * @var int
     *
     * @ORM\Column(name="targets", type="integer", nullable=false)
     */
    private $targets;

    /**
     * @var int
     *
     * @ORM\Column(name="trackings", type="integer", nullable=false)
     */
    private $trackings;

    /**
     * @var int
     *
     * @ORM\Column(name="processes", type="integer", nullable=false)
     */
    private $processes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateCreated = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateModified = 'CURRENT_TIMESTAMP';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var \App\Models\Entity\SocialNetwork
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entity\SocialNetwork")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="social_network_id", referencedColumnName="id")
     * })
     */
    private $socialNetwork;



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
     * Set name.
     *
     * @param string $name
     *
     * @return SocialNetworkPlan
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price.
     *
     * @param string $price
     *
     * @return SocialNetworkPlan
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
     * Set duration.
     *
     * @param string $duration
     *
     * @return SocialNetworkPlan
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration.
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set offer.
     *
     * @param bool $offer
     *
     * @return SocialNetworkPlan
     */
    public function setOffer($offer)
    {
        $this->offer = $offer;

        return $this;
    }

    /**
     * Get offer.
     *
     * @return bool
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Set permitLikes.
     *
     * @param bool $permitLikes
     *
     * @return SocialNetworkPlan
     */
    public function setPermitLikes($permitLikes)
    {
        $this->permitLikes = $permitLikes;

        return $this;
    }

    /**
     * Get permitLikes.
     *
     * @return bool
     */
    public function getPermitLikes()
    {
        return $this->permitLikes;
    }

    /**
     * Set permitShares.
     *
     * @param bool $permitShares
     *
     * @return SocialNetworkPlan
     */
    public function setPermitShares($permitShares)
    {
        $this->permitShares = $permitShares;

        return $this;
    }

    /**
     * Get permitShares.
     *
     * @return bool
     */
    public function getPermitShares()
    {
        return $this->permitShares;
    }

    /**
     * Set permitFollows.
     *
     * @param bool $permitFollows
     *
     * @return SocialNetworkPlan
     */
    public function setPermitFollows($permitFollows)
    {
        $this->permitFollows = $permitFollows;

        return $this;
    }

    /**
     * Get permitFollows.
     *
     * @return bool
     */
    public function getPermitFollows()
    {
        return $this->permitFollows;
    }

    /**
     * Set likes.
     *
     * @param int $likes
     *
     * @return SocialNetworkPlan
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get likes.
     *
     * @return int
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set shares.
     *
     * @param int $shares
     *
     * @return SocialNetworkPlan
     */
    public function setShares($shares)
    {
        $this->shares = $shares;

        return $this;
    }

    /**
     * Get shares.
     *
     * @return int
     */
    public function getShares()
    {
        return $this->shares;
    }

    /**
     * Set targets.
     *
     * @param int $targets
     *
     * @return SocialNetworkPlan
     */
    public function setTargets($targets)
    {
        $this->targets = $targets;

        return $this;
    }

    /**
     * Get targets.
     *
     * @return int
     */
    public function getTargets()
    {
        return $this->targets;
    }

    /**
     * Set trackings.
     *
     * @param int $trackings
     *
     * @return SocialNetworkPlan
     */
    public function setTrackings($trackings)
    {
        $this->trackings = $trackings;

        return $this;
    }

    /**
     * Get trackings.
     *
     * @return int
     */
    public function getTrackings()
    {
        return $this->trackings;
    }

    /**
     * Set processes.
     *
     * @param int $processes
     *
     * @return SocialNetworkPlan
     */
    public function setProcesses($processes)
    {
        $this->processes = $processes;

        return $this;
    }

    /**
     * Get processes.
     *
     * @return int
     */
    public function getProcesses()
    {
        return $this->processes;
    }

    /**
     * Set dateCreated.
     *
     * @param \DateTime $dateCreated
     *
     * @return SocialNetworkPlan
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
     * Set dateModified.
     *
     * @param \DateTime $dateModified
     *
     * @return SocialNetworkPlan
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified.
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Set active.
     *
     * @param bool $active
     *
     * @return SocialNetworkPlan
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active.
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set socialNetwork.
     *
     * @param \App\Models\Entity\SocialNetwork|null $socialNetwork
     *
     * @return SocialNetworkPlan
     */
    public function setSocialNetwork(\App\Models\Entity\SocialNetwork $socialNetwork = null)
    {
        $this->socialNetwork = $socialNetwork;

        return $this;
    }

    /**
     * Get socialNetwork.
     *
     * @return \App\Models\Entity\SocialNetwork|null
     */
    public function getSocialNetwork()
    {
        return $this->socialNetwork;
    }
}
