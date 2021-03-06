<?php

namespace DoctrineProxies\__CG__\App\Models\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AutomatonJob extends \App\Models\Entity\AutomatonJob implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'id', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'name', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'action', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'method', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'description', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'icon', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'ttr', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'priority', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'isSocial', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'active', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'queue'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'id', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'name', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'action', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'method', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'description', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'icon', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'ttr', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'priority', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'isSocial', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'active', '' . "\0" . 'App\\Models\\Entity\\AutomatonJob' . "\0" . 'queue'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AutomatonJob $proxy) {
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setAction($action)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAction', [$action]);

        return parent::setAction($action);
    }

    /**
     * {@inheritDoc}
     */
    public function getAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAction', []);

        return parent::getAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setMethod($method)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMethod', [$method]);

        return parent::setMethod($method);
    }

    /**
     * {@inheritDoc}
     */
    public function getMethod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMethod', []);

        return parent::getMethod();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setIcon($icon)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIcon', [$icon]);

        return parent::setIcon($icon);
    }

    /**
     * {@inheritDoc}
     */
    public function getIcon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIcon', []);

        return parent::getIcon();
    }

    /**
     * {@inheritDoc}
     */
    public function setTtr($ttr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTtr', [$ttr]);

        return parent::setTtr($ttr);
    }

    /**
     * {@inheritDoc}
     */
    public function getTtr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTtr', []);

        return parent::getTtr();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriority($priority)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriority', [$priority]);

        return parent::setPriority($priority);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriority()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriority', []);

        return parent::getPriority();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsSocial($isSocial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsSocial', [$isSocial]);

        return parent::setIsSocial($isSocial);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsSocial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsSocial', []);

        return parent::getIsSocial();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setQueue(\App\Models\Entity\AutomatonQueue $queue = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQueue', [$queue]);

        return parent::setQueue($queue);
    }

    /**
     * {@inheritDoc}
     */
    public function getQueue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQueue', []);

        return parent::getQueue();
    }

}
