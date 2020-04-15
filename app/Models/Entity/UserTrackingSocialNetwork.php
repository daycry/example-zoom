<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTrackingSocialNetwork
 *
 * @ORM\Table(name="user_tracking_social_network", indexes={@ORM\Index(name="user_social_network_id", columns={"user_social_network_id"}), @ORM\Index(name="user_tracking_id", columns={"user_tracking_id"}), @ORM\Index(name="active", columns={"active"})})
 * @ORM\Entity
 */
class UserTrackingSocialNetwork
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
     * @var bool|null
     *
     * @ORM\Column(name="shares", type="boolean", nullable=true)
     */
    private $shares;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="likes", type="boolean", nullable=true)
     */
    private $likes;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="follows", type="boolean", nullable=true)
     */
    private $follows;

    /**
     * @var int
     *
     * @ORM\Column(name="max_results", type="integer", nullable=false, options={"default"="15"})
     */
    private $maxResults = '15';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $active = true;

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
     * @var \App\Models\Entity\UserTracking
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entity\UserTracking")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_tracking_id", referencedColumnName="id")
     * })
     */
    private $userTracking;



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
     * Set shares.
     *
     * @param bool|null $shares
     *
     * @return UserTrackingSocialNetwork
     */
    public function setShares($shares = null)
    {
        $this->shares = $shares;

        return $this;
    }

    /**
     * Get shares.
     *
     * @return bool|null
     */
    public function getShares()
    {
        return $this->shares;
    }

    /**
     * Set likes.
     *
     * @param bool|null $likes
     *
     * @return UserTrackingSocialNetwork
     */
    public function setLikes($likes = null)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get likes.
     *
     * @return bool|null
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set follows.
     *
     * @param bool|null $follows
     *
     * @return UserTrackingSocialNetwork
     */
    public function setFollows($follows = null)
    {
        $this->follows = $follows;

        return $this;
    }

    /**
     * Get follows.
     *
     * @return bool|null
     */
    public function getFollows()
    {
        return $this->follows;
    }

    /**
     * Set maxResults.
     *
     * @param int $maxResults
     *
     * @return UserTrackingSocialNetwork
     */
    public function setMaxResults($maxResults)
    {
        $this->maxResults = $maxResults;

        return $this;
    }

    /**
     * Get maxResults.
     *
     * @return int
     */
    public function getMaxResults()
    {
        return $this->maxResults;
    }

    /**
     * Set active.
     *
     * @param bool|null $active
     *
     * @return UserTrackingSocialNetwork
     */
    public function setActive($active = null)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active.
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set userSocialNetwork.
     *
     * @param \App\Models\Entity\UserSocialNetwork|null $userSocialNetwork
     *
     * @return UserTrackingSocialNetwork
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
     * Set userTracking.
     *
     * @param \App\Models\Entity\UserTracking|null $userTracking
     *
     * @return UserTrackingSocialNetwork
     */
    public function setUserTracking(\App\Models\Entity\UserTracking $userTracking = null)
    {
        $this->userTracking = $userTracking;

        return $this;
    }

    /**
     * Get userTracking.
     *
     * @return \App\Models\Entity\UserTracking|null
     */
    public function getUserTracking()
    {
        return $this->userTracking;
    }
}
