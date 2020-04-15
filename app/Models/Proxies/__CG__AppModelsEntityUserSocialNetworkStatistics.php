<?php

namespace DoctrineProxies\__CG__\App\Models\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UserSocialNetworkStatistics extends \App\Models\Entity\UserSocialNetworkStatistics implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'id', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'likes', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'shares', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'follows', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'unfollows', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'dateCreated', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'dateModified', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'userSocialNetwork', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'userSocialNetworkPlan'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'id', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'likes', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'shares', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'follows', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'unfollows', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'dateCreated', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'dateModified', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'userSocialNetwork', '' . "\0" . 'App\\Models\\Entity\\UserSocialNetworkStatistics' . "\0" . 'userSocialNetworkPlan'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (UserSocialNetworkStatistics $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLikes($likes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLikes', [$likes]);

        return parent::setLikes($likes);
    }

    /**
     * {@inheritDoc}
     */
    public function getLikes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLikes', []);

        return parent::getLikes();
    }

    /**
     * {@inheritDoc}
     */
    public function setShares($shares)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShares', [$shares]);

        return parent::setShares($shares);
    }

    /**
     * {@inheritDoc}
     */
    public function getShares()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShares', []);

        return parent::getShares();
    }

    /**
     * {@inheritDoc}
     */
    public function setFollows($follows)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFollows', [$follows]);

        return parent::setFollows($follows);
    }

    /**
     * {@inheritDoc}
     */
    public function getFollows()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFollows', []);

        return parent::getFollows();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnfollows($unfollows)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnfollows', [$unfollows]);

        return parent::setUnfollows($unfollows);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnfollows()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnfollows', []);

        return parent::getUnfollows();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreated($dateCreated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreated', [$dateCreated]);

        return parent::setDateCreated($dateCreated);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreated', []);

        return parent::getDateCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModified($dateModified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModified', [$dateModified]);

        return parent::setDateModified($dateModified);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModified', []);

        return parent::getDateModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserSocialNetwork(\App\Models\Entity\UserSocialNetwork $userSocialNetwork = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserSocialNetwork', [$userSocialNetwork]);

        return parent::setUserSocialNetwork($userSocialNetwork);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserSocialNetwork()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserSocialNetwork', []);

        return parent::getUserSocialNetwork();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserSocialNetworkPlan(\App\Models\Entity\UserSocialNetworkPlan $userSocialNetworkPlan = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserSocialNetworkPlan', [$userSocialNetworkPlan]);

        return parent::setUserSocialNetworkPlan($userSocialNetworkPlan);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserSocialNetworkPlan()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserSocialNetworkPlan', []);

        return parent::getUserSocialNetworkPlan();
    }

}
