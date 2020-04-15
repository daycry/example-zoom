<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AutomatonJob
 *
 * @ORM\Table(name="automaton_job", indexes={@ORM\Index(name="active", columns={"active"}), @ORM\Index(name="queue_id", columns={"queue_id"})})
 * @ORM\Entity
 */
class AutomatonJob
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
     * @ORM\Column(name="action", type="string", length=50, nullable=false)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=50, nullable=false)
     */
    private $method;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=50, nullable=false)
     */
    private $icon;

    /**
     * @var int
     *
     * @ORM\Column(name="ttr", type="integer", nullable=false)
     */
    private $ttr;

    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer", nullable=false)
     */
    private $priority;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_social", type="boolean", nullable=false)
     */
    private $isSocial;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var \App\Models\Entity\AutomatonQueue
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entity\AutomatonQueue")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="queue_id", referencedColumnName="id")
     * })
     */
    private $queue;



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
     * @return AutomatonJob
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
     * Set action.
     *
     * @param string $action
     *
     * @return AutomatonJob
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set method.
     *
     * @param string $method
     *
     * @return AutomatonJob
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method.
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return AutomatonJob
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set icon.
     *
     * @param string $icon
     *
     * @return AutomatonJob
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set ttr.
     *
     * @param int $ttr
     *
     * @return AutomatonJob
     */
    public function setTtr($ttr)
    {
        $this->ttr = $ttr;

        return $this;
    }

    /**
     * Get ttr.
     *
     * @return int
     */
    public function getTtr()
    {
        return $this->ttr;
    }

    /**
     * Set priority.
     *
     * @param int $priority
     *
     * @return AutomatonJob
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority.
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set isSocial.
     *
     * @param bool $isSocial
     *
     * @return AutomatonJob
     */
    public function setIsSocial($isSocial)
    {
        $this->isSocial = $isSocial;

        return $this;
    }

    /**
     * Get isSocial.
     *
     * @return bool
     */
    public function getIsSocial()
    {
        return $this->isSocial;
    }

    /**
     * Set active.
     *
     * @param bool $active
     *
     * @return AutomatonJob
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
     * Set queue.
     *
     * @param \App\Models\Entity\AutomatonQueue|null $queue
     *
     * @return AutomatonJob
     */
    public function setQueue(\App\Models\Entity\AutomatonQueue $queue = null)
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * Get queue.
     *
     * @return \App\Models\Entity\AutomatonQueue|null
     */
    public function getQueue()
    {
        return $this->queue;
    }
}
