<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocialNetworkAutomatonJob
 *
 * @ORM\Table(name="social_network_automaton_job", indexes={@ORM\Index(name="social_network_id", columns={"social_network_id"}), @ORM\Index(name="automaton_job_id", columns={"automaton_job_id"}), @ORM\Index(name="active", columns={"active"})})
 * @ORM\Entity
 */
class SocialNetworkAutomatonJob
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
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var \App\Models\Entity\AutomatonJob
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entity\AutomatonJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="automaton_job_id", referencedColumnName="id")
     * })
     */
    private $automatonJob;

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
     * Set active.
     *
     * @param bool $active
     *
     * @return SocialNetworkAutomatonJob
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
     * Set automatonJob.
     *
     * @param \App\Models\Entity\AutomatonJob|null $automatonJob
     *
     * @return SocialNetworkAutomatonJob
     */
    public function setAutomatonJob(\App\Models\Entity\AutomatonJob $automatonJob = null)
    {
        $this->automatonJob = $automatonJob;

        return $this;
    }

    /**
     * Get automatonJob.
     *
     * @return \App\Models\Entity\AutomatonJob|null
     */
    public function getAutomatonJob()
    {
        return $this->automatonJob;
    }

    /**
     * Set socialNetwork.
     *
     * @param \App\Models\Entity\SocialNetwork|null $socialNetwork
     *
     * @return SocialNetworkAutomatonJob
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
