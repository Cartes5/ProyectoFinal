<?php

namespace ContainerXoRKCi0;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd6ae2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf4254 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf7fa5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'getConnection', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'getMetadataFactory', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'getExpressionBuilder', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'beginTransaction', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'getCache', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'transactional', array('func' => $func), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'commit', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->commit();
    }

    public function rollback()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'rollback', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'getClassMetadata', array('className' => $className), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'createQuery', array('dql' => $dql), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'createNamedQuery', array('name' => $name), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'createQueryBuilder', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'flush', array('entity' => $entity), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'clear', array('entityName' => $entityName), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->clear($entityName);
    }

    public function close()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'close', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->close();
    }

    public function persist($entity)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'persist', array('entity' => $entity), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'remove', array('entity' => $entity), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'refresh', array('entity' => $entity), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'detach', array('entity' => $entity), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'merge', array('entity' => $entity), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'contains', array('entity' => $entity), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'getEventManager', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'getConfiguration', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'isOpen', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'getUnitOfWork', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'getProxyFactory', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'initializeObject', array('obj' => $obj), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'getFilters', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'isFiltersStateClean', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'hasFilters', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return $this->valueHolderd6ae2->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerf4254 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd6ae2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd6ae2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd6ae2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, '__get', ['name' => $name], $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        if (isset(self::$publicPropertiesf7fa5[$name])) {
            return $this->valueHolderd6ae2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6ae2;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd6ae2;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6ae2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd6ae2;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, '__isset', array('name' => $name), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6ae2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd6ae2;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, '__unset', array('name' => $name), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6ae2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd6ae2;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, '__clone', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        $this->valueHolderd6ae2 = clone $this->valueHolderd6ae2;
    }

    public function __sleep()
    {
        $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, '__sleep', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;

        return array('valueHolderd6ae2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf4254 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf4254;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf4254 && ($this->initializerf4254->__invoke($valueHolderd6ae2, $this, 'initializeProxy', array(), $this->initializerf4254) || 1) && $this->valueHolderd6ae2 = $valueHolderd6ae2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd6ae2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd6ae2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
