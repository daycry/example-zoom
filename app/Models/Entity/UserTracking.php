<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTracking
 *
 * @ORM\Table(name="user_tracking", indexes={@ORM\Index(name="tracked", columns={"tracked"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class UserTracking
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
     * @ORM\Column(name="tracked", type="string", length=100, nullable=false)
     */
    private $tracked;

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
     * Set tracked.
     *
     * @param string $tracked
     *
     * @return UserTracking
     */
    public function setTracked($tracked)
    {
        $this->tracked = $tracked;

        return $this;
    }

    /**
     * Get tracked.
     *
     * @return string
     */
    public function getTracked()
    {
        return $this->tracked;
    }

    /**
     * Set dateCreated.
     *
     * @param \DateTime $dateCreated
     *
     * @return UserTracking
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
     * @return UserTracking
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
     * Set user.
     *
     * @param \App\Models\Entity\User|null $user
     *
     * @return UserTracking
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
