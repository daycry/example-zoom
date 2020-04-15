<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserBlacklistSocialNetwork
 *
 * @ORM\Table(name="user_blacklist_social_network", indexes={@ORM\Index(name="user_social_network_id", columns={"user_social_network_id"}), @ORM\Index(name="user_blacklist_id", columns={"user_blacklist_id"}), @ORM\Index(name="active", columns={"active"})})
 * @ORM\Entity
 */
class UserBlacklistSocialNetwork
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
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var \App\Models\Entity\UserBlacklist
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entity\UserBlacklist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_blacklist_id", referencedColumnName="id")
     * })
     */
    private $userBlacklist;

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
     * Set active.
     *
     * @param bool|null $active
     *
     * @return UserBlacklistSocialNetwork
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
     * Set userBlacklist.
     *
     * @param \App\Models\Entity\UserBlacklist|null $userBlacklist
     *
     * @return UserBlacklistSocialNetwork
     */
    public function setUserBlacklist(\App\Models\Entity\UserBlacklist $userBlacklist = null)
    {
        $this->userBlacklist = $userBlacklist;

        return $this;
    }

    /**
     * Get userBlacklist.
     *
     * @return \App\Models\Entity\UserBlacklist|null
     */
    public function getUserBlacklist()
    {
        return $this->userBlacklist;
    }

    /**
     * Set userSocialNetwork.
     *
     * @param \App\Models\Entity\UserSocialNetwork|null $userSocialNetwork
     *
     * @return UserBlacklistSocialNetwork
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
