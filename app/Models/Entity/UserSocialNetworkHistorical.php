<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSocialNetworkHistorical
 *
 * @ORM\Table(name="user_social_network_historical", indexes={@ORM\Index(name="user_social_network", columns={"user_social_network_id"}), @ORM\Index(name="date_created", columns={"date_created"})})
 * @ORM\Entity
 */
class UserSocialNetworkHistorical
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
     * @ORM\Column(name="followers", type="integer", nullable=false)
     */
    private $followers;

    /**
     * @var int
     *
     * @ORM\Column(name="friends", type="integer", nullable=false)
     */
    private $friends;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateCreated = 'CURRENT_TIMESTAMP';

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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set followers.
     *
     * @param int $followers
     *
     * @return UserSocialNetworkHistorical
     */
    public function setFollowers($followers)
    {
        $this->followers = $followers;

        return $this;
    }

    /**
     * Get followers.
     *
     * @return int
     */
    public function getFollowers()
    {
        return $this->followers;
    }

    /**
     * Set friends.
     *
     * @param int $friends
     *
     * @return UserSocialNetworkHistorical
     */
    public function setFriends($friends)
    {
        $this->friends = $friends;

        return $this;
    }

    /**
     * Get friends.
     *
     * @return int
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * Set dateCreated.
     *
     * @param \DateTime $dateCreated
     *
     * @return UserSocialNetworkHistorical
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
     * Set userSocialNetwork.
     *
     * @param \App\Models\Entity\UserSocialNetwork|null $userSocialNetwork
     *
     * @return UserSocialNetworkHistorical
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
}
