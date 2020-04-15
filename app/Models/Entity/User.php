<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="email", columns={"email"})}, indexes={@ORM\Index(name="date_remove", columns={"date_remove"}), @ORM\Index(name="affiliate", columns={"affiliate"}), @ORM\Index(name="activation_token", columns={"activation_token", "recovery_token"}), @ORM\Index(name="active", columns={"active"})})
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tfa_token", type="string", length=255, nullable=true)
     */
    private $tfaToken;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activation_token", type="string", length=40, nullable=true)
     */
    private $activationToken;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recovery_token", type="string", length=40, nullable=true)
     */
    private $recoveryToken;

    /**
     * @var string
     *
     * @ORM\Column(name="affiliate", type="string", length=50, nullable=false)
     */
    private $affiliate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateCreated = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_remove", type="datetime", nullable=true)
     */
    private $dateRemove;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';



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
     * Set email.
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set tfaToken.
     *
     * @param string|null $tfaToken
     *
     * @return User
     */
    public function setTfaToken($tfaToken = null)
    {
        $this->tfaToken = $tfaToken;

        return $this;
    }

    /**
     * Get tfaToken.
     *
     * @return string|null
     */
    public function getTfaToken()
    {
        return $this->tfaToken;
    }

    /**
     * Set activationToken.
     *
     * @param string|null $activationToken
     *
     * @return User
     */
    public function setActivationToken($activationToken = null)
    {
        $this->activationToken = $activationToken;

        return $this;
    }

    /**
     * Get activationToken.
     *
     * @return string|null
     */
    public function getActivationToken()
    {
        return $this->activationToken;
    }

    /**
     * Set recoveryToken.
     *
     * @param string|null $recoveryToken
     *
     * @return User
     */
    public function setRecoveryToken($recoveryToken = null)
    {
        $this->recoveryToken = $recoveryToken;

        return $this;
    }

    /**
     * Get recoveryToken.
     *
     * @return string|null
     */
    public function getRecoveryToken()
    {
        return $this->recoveryToken;
    }

    /**
     * Set affiliate.
     *
     * @param string $affiliate
     *
     * @return User
     */
    public function setAffiliate($affiliate)
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * Get affiliate.
     *
     * @return string
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }

    /**
     * Set dateCreated.
     *
     * @param \DateTime $dateCreated
     *
     * @return User
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
     * Set lastLogin.
     *
     * @param \DateTime|null $lastLogin
     *
     * @return User
     */
    public function setLastLogin($lastLogin = null)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin.
     *
     * @return \DateTime|null
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set dateRemove.
     *
     * @param \DateTime|null $dateRemove
     *
     * @return User
     */
    public function setDateRemove($dateRemove = null)
    {
        $this->dateRemove = $dateRemove;

        return $this;
    }

    /**
     * Get dateRemove.
     *
     * @return \DateTime|null
     */
    public function getDateRemove()
    {
        return $this->dateRemove;
    }

    /**
     * Set active.
     *
     * @param bool $active
     *
     * @return User
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
