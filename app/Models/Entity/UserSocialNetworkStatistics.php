<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSocialNetworkStatistics
 *
 * @ORM\Table(name="user_social_network_statistics", indexes={@ORM\Index(name="user_social_network_id", columns={"user_social_network_id"}), @ORM\Index(name="user_social_network_plan_id", columns={"user_social_network_plan_id"})})
 * @ORM\Entity
 */
class UserSocialNetworkStatistics
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
     * @ORM\Column(name="likes", type="integer", nullable=false)
     */
    private $likes = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="shares", type="integer", nullable=false)
     */
    private $shares = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="follows", type="integer", nullable=false)
     */
    private $follows = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="unfollows", type="integer", nullable=false)
     */
    private $unfollows = '0';

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
     * @var \App\Models\Entity\UserSocialNetwork
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entity\UserSocialNetwork")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_social_network_id", referencedColumnName="id")
     * })
     */
    private $userSocialNetwork;

    /**
     * @var \App\Models\Entity\UserSocialNetworkPlan
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entity\UserSocialNetworkPlan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_social_network_plan_id", referencedColumnName="id")
     * })
     */
    private $userSocialNetworkPlan;



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
     * Set likes.
     *
     * @param int $likes
     *
     * @return UserSocialNetworkStatistics
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
     * @return UserSocialNetworkStatistics
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
     * Set follows.
     *
     * @param int $follows
     *
     * @return UserSocialNetworkStatistics
     */
    public function setFollows($follows)
    {
        $this->follows = $follows;

        return $this;
    }

    /**
     * Get follows.
     *
     * @return int
     */
    public function getFollows()
    {
        return $this->follows;
    }

    /**
     * Set unfollows.
     *
     * @param int $unfollows
     *
     * @return UserSocialNetworkStatistics
     */
    public function setUnfollows($unfollows)
    {
        $this->unfollows = $unfollows;

        return $this;
    }

    /**
     * Get unfollows.
     *
     * @return int
     */
    public function getUnfollows()
    {
        return $this->unfollows;
    }

    /**
     * Set dateCreated.
     *
     * @param \DateTime $dateCreated
     *
     * @return UserSocialNetworkStatistics
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
     * @return UserSocialNetworkStatistics
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
     * Set userSocialNetwork.
     *
     * @param \App\Models\Entity\UserSocialNetwork|null $userSocialNetwork
     *
     * @return UserSocialNetworkStatistics
     */
    public function setUserSocialNetwork(\App\Models\Entity\UserSocialNetwork $userSocialNetwork = null)
    {
        $this->userSocialNetwork = $userSocialNetwork;

        return $this;
    }

    /**
     * Get userSocialNetwork.
     *
     * @return \App\Models\Entity\UserSocialNetwork|null
     */
    public function getUserSocialNetwork()
    {
        return $this->userSocialNetwork;
    }

    /**
     * Set userSocialNetworkPlan.
     *
     * @param \App\Models\Entity\UserSocialNetworkPlan|null $userSocialNetworkPlan
     *
     * @return UserSocialNetworkStatistics
     */
    public function setUserSocialNetworkPlan(\App\Models\Entity\UserSocialNetworkPlan $userSocialNetworkPlan = null)
    {
        $this->userSocialNetworkPlan = $userSocialNetworkPlan;

        return $this;
    }

    /**
     * Get userSocialNetworkPlan.
     *
     * @return \App\Models\Entity\UserSocialNetworkPlan|null
     */
    public function getUserSocialNetworkPlan()
    {
        return $this->userSocialNetworkPlan;
    }
}
