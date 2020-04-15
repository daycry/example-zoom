<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSocialNetwork
 *
 * @ORM\Table(name="user_social_network", indexes={@ORM\Index(name="user_social_network_id", columns={"user_id"}), @ORM\Index(name="social_network_id", columns={"social_network_id"}), @ORM\Index(name="active", columns={"active"})})
 * @ORM\Entity
 */
class UserSocialNetwork
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
     * @var string|null
     *
     * @ORM\Column(name="configuration", type="text", length=65535, nullable=true)
     */
    private $configuration;

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
    private $active = '0';

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
     * Set configuration.
     *
     * @param string|null $configuration
     *
     * @return UserSocialNetwork
     */
    public function setConfiguration($configuration = null)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * Get configuration.
     *
     * @return string|null
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Set dateCreated.
     *
     * @param \DateTime $dateCreated
     *
     * @return UserSocialNetwork
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
     * @return UserSocialNetwork
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
     * @return UserSocialNetwork
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
     * @return UserSocialNetwork
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

    /**
     * Set user.
     *
     * @param \App\Models\Entity\User|null $user
     *
     * @return UserSocialNetwork
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
