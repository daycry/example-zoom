<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSocialNetworkTask
 *
 * @ORM\Table(name="user_social_network_task", indexes={@ORM\Index(name="user_social_network_id", columns={"user_social_network_id"}), @ORM\Index(name="active", columns={"active"}), @ORM\Index(name="social_network_automaton_job_id", columns={"social_network_automaton_job_id"})})
 * @ORM\Entity
 */
class UserSocialNetworkTask
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
     * @ORM\Column(name="exec_at", type="string", length=50, nullable=false)
     */
    private $execAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="in_progress", type="boolean", nullable=false)
     */
    private $inProgress = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_execution", type="datetime", nullable=true)
     */
    private $lastExecution;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var bool
     *
     * @ORM\Column(name="editable", type="boolean", nullable=false)
     */
    private $editable = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var \App\Models\Entity\SocialNetworkAutomatonJob
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entity\SocialNetworkAutomatonJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="social_network_automaton_job_id", referencedColumnName="id")
     * })
     */
    private $socialNetworkAutomatonJob;

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
     * Set execAt.
     *
     * @param string $execAt
     *
     * @return UserSocialNetworkTask
     */
    public function setExecAt($execAt)
    {
        $this->execAt = $execAt;

        return $this;
    }

    /**
     * Get execAt.
     *
     * @return string
     */
    public function getExecAt()
    {
        return $this->execAt;
    }

    /**
     * Set inProgress.
     *
     * @param bool $inProgress
     *
     * @return UserSocialNetworkTask
     */
    public function setInProgress($inProgress)
    {
        $this->inProgress = $inProgress;

        return $this;
    }

    /**
     * Get inProgress.
     *
     * @return bool
     */
    public function getInProgress()
    {
        return $this->inProgress;
    }

    /**
     * Set lastExecution.
     *
     * @param \DateTime|null $lastExecution
     *
     * @return UserSocialNetworkTask
     */
    public function setLastExecution($lastExecution = null)
    {
        $this->lastExecution = $lastExecution;

        return $this;
    }

    /**
     * Get lastExecution.
     *
     * @return \DateTime|null
     */
    public function getLastExecution()
    {
        return $this->lastExecution;
    }

    /**
     * Set dateModified.
     *
     * @param \DateTime|null $dateModified
     *
     * @return UserSocialNetworkTask
     */
    public function setDateModified($dateModified = null)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified.
     *
     * @return \DateTime|null
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Set editable.
     *
     * @param bool $editable
     *
     * @return UserSocialNetworkTask
     */
    public function setEditable($editable)
    {
        $this->editable = $editable;

        return $this;
    }

    /**
     * Get editable.
     *
     * @return bool
     */
    public function getEditable()
    {
        return $this->editable;
    }

    /**
     * Set active.
     *
     * @param bool $active
     *
     * @return UserSocialNetworkTask
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
     * Set socialNetworkAutomatonJob.
     *
     * @param \App\Models\Entity\SocialNetworkAutomatonJob|null $socialNetworkAutomatonJob
     *
     * @return UserSocialNetworkTask
     */
    public function setSocialNetworkAutomatonJob(\App\Models\Entity\SocialNetworkAutomatonJob $socialNetworkAutomatonJob = null)
    {
        $this->socialNetworkAutomatonJob = $socialNetworkAutomatonJob;

        return $this;
    }

    /**
     * Get socialNetworkAutomatonJob.
     *
     * @return \App\Models\Entity\SocialNetworkAutomatonJob|null
     */
    public function getSocialNetworkAutomatonJob()
    {
        return $this->socialNetworkAutomatonJob;
    }

    /**
     * Set userSocialNetwork.
     *
     * @param \App\Models\Entity\UserSocialNetwork|null $userSocialNetwork
     *
     * @return UserSocialNetworkTask
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
