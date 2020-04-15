<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSocialNetworkPlan
 *
 * @ORM\Table(name="user_social_network_plan", indexes={@ORM\Index(name="user_social_network_id", columns={"user_social_network_id"}), @ORM\Index(name="date_end", columns={"date_end"}), @ORM\Index(name="social_network_plan_id", columns={"social_network_plan_id"}), @ORM\Index(name="date_start", columns={"date_start"})})
 * @ORM\Entity
 */
class UserSocialNetworkPlan
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_start", type="datetime", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_end", type="datetime", nullable=true)
     */
    private $dateEnd;

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
     * Set dateStart.
     *
     * @param \DateTime|null $dateStart
     *
     * @return UserSocialNetworkPlan
     */
    public function setDateStart($dateStart = null)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart.
     *
     * @return \DateTime|null
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd.
     *
     * @param \DateTime|null $dateEnd
     *
     * @return UserSocialNetworkPlan
     */
    public function setDateEnd($dateEnd = null)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd.
     *
     * @return \DateTime|null
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set socialNetworkPlan.
     *
     * @param \App\Models\Entity\SocialNetworkPlan|null $socialNetworkPlan
     *
     * @return UserSocialNetworkPlan
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

    /**
     * Set userSocialNetwork.
     *
     * @param \App\Models\Entity\UserSocialNetwork|null $userSocialNetwork
     *
     * @return UserSocialNetworkPlan
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
