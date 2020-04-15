<?php

namespace App\Models\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserKeywordSocialNetwork
 *
 * @ORM\Table(name="user_keyword_social_network", indexes={@ORM\Index(name="user_social_network_id", columns={"user_social_network_id"}), @ORM\Index(name="active", columns={"active"}), @ORM\Index(name="user_keyword_id", columns={"user_keyword_id"})})
 * @ORM\Entity
 */
class UserKeywordSocialNetwork
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
     * @ORM\Column(name="shares", type="boolean", nullable=true)
     */
    private $shares;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="likes", type="boolean", nullable=true)
     */
    private $likes;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="follows", type="boolean", nullable=true)
     */
    private $follows;

    /**
     * @var int
     *
     * @ORM\Column(name="max_results", type="integer", nullable=false, options={"default"="15"})
     */
    private $maxResults = '15';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var \App\Models\Entity\UserKeyword
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entity\UserKeyword")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_keyword_id", referencedColumnName="id")
     * })
     */
    private $userKeyword;

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
     * Set shares.
     *
     * @param bool|null $shares
     *
     * @return UserKeywordSocialNetwork
     */
    public function setShares($shares = null)
    {
        $this->shares = $shares;

        return $this;
    }

    /**
     * Get shares.
     *
     * @return bool|null
     */
    public function getShares()
    {
        return $this->shares;
    }

    /**
     * Set likes.
     *
     * @param bool|null $likes
     *
     * @return UserKeywordSocialNetwork
     */
    public function setLikes($likes = null)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get likes.
     *
     * @return bool|null
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set follows.
     *
     * @param bool|null $follows
     *
     * @return UserKeywordSocialNetwork
     */
    public function setFollows($follows = null)
    {
        $this->follows = $follows;

        return $this;
    }

    /**
     * Get follows.
     *
     * @return bool|null
     */
    public function getFollows()
    {
        return $this->follows;
    }

    /**
     * Set maxResults.
     *
     * @param int $maxResults
     *
     * @return UserKeywordSocialNetwork
     */
    public function setMaxResults($maxResults)
    {
        $this->maxResults = $maxResults;

        return $this;
    }

    /**
     * Get maxResults.
     *
     * @return int
     */
    public function getMaxResults()
    {
        return $this->maxResults;
    }

    /**
     * Set active.
     *
     * @param bool|null $active
     *
     * @return UserKeywordSocialNetwork
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
     * Set userKeyword.
     *
     * @param \App\Models\Entity\UserKeyword|null $userKeyword
     *
     * @return UserKeywordSocialNetwork
     */
    public function setUserKeyword(\App\Models\Entity\UserKeyword $userKeyword = null)
    {
        $this->userKeyword = $userKeyword;

        return $this;
    }

    /**
     * Get userKeyword.
     *
     * @return \App\Models\Entity\UserKeyword|null
     */
    public function getUserKeyword()
    {
        return $this->userKeyword;
    }

    /**
     * Set userSocialNetwork.
     *
     * @param \App\Models\Entity\UserSocialNetwork|null $userSocialNetwork
     *
     * @return UserKeywordSocialNetwork
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
