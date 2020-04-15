<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crypter
 *
 * @ORM\Table(name="crypter", indexes={@ORM\Index(name="name", columns={"param"})})
 * @ORM\Entity
 */
class Crypter
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
     * @ORM\Column(name="param", type="string", length=50, nullable=false)
     */
    private $param;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_expired", type="date", nullable=true)
     */
    private $dateExpired;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;



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
     * Set param.
     *
     * @param string $param
     *
     * @return Crypter
     */
    public function setParam($param)
    {
        $this->param = $param;

        return $this;
    }

    /**
     * Get param.
     *
     * @return string
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * Set value.
     *
     * @param string|null $value
     *
     * @return Crypter
     */
    public function setValue($value = null)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value.
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set dateExpired.
     *
     * @param \DateTime|null $dateExpired
     *
     * @return Crypter
     */
    public function setDateExpired($dateExpired = null)
    {
        $this->dateExpired = $dateExpired;

        return $this;
    }

    /**
     * Get dateExpired.
     *
     * @return \DateTime|null
     */
    public function getDateExpired()
    {
        return $this->dateExpired;
    }

    /**
     * Set active.
     *
     * @param bool $active
     *
     * @return Crypter
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
}
