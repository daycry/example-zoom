<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu", indexes={@ORM\Index(name="orden", columns={"position"}), @ORM\Index(name="parent", columns={"parent"})})
 * @ORM\Entity
 */
class Menu
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
     * @var string|null
     *
     * @ORM\Column(name="interface", type="string", length=50, nullable=true)
     */
    private $interface;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=50, nullable=true)
     */
    private $url;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @var string|null
     *
     * @ORM\Column(name="icon", type="string", length=50, nullable=true)
     */
    private $icon;

    /**
     * @var bool
     *
     * @ORM\Column(name="in_menu", type="boolean", nullable=false, options={"default"="1"})
     */
    private $inMenu = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var \App\Models\Entity\Menu
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entity\Menu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent", referencedColumnName="id")
     * })
     */
    private $parent;



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
     * @return Menu
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
     * Set interface.
     *
     * @param string|null $interface
     *
     * @return Menu
     */
    public function setInterface($interface = null)
    {
        $this->interface = $interface;

        return $this;
    }

    /**
     * Get interface.
     *
     * @return string|null
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * Set url.
     *
     * @param string|null $url
     *
     * @return Menu
     */
    public function setUrl($url = null)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url.
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set position.
     *
     * @param int $position
     *
     * @return Menu
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position.
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set icon.
     *
     * @param string|null $icon
     *
     * @return Menu
     */
    public function setIcon($icon = null)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon.
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set inMenu.
     *
     * @param bool $inMenu
     *
     * @return Menu
     */
    public function setInMenu($inMenu)
    {
        $this->inMenu = $inMenu;

        return $this;
    }

    /**
     * Get inMenu.
     *
     * @return bool
     */
    public function getInMenu()
    {
        return $this->inMenu;
    }

    /**
     * Set active.
     *
     * @param bool $active
     *
     * @return Menu
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
     * Set parent.
     *
     * @param \App\Models\Entity\Menu|null $parent
     *
     * @return Menu
     */
    public function setParent(\App\Models\Entity\Menu $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent.
     *
     * @return \App\Models\Entity\Menu|null
     */
    public function getParent()
    {
        return $this->parent;
    }
}
