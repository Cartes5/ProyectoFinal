<?php

namespace ContainerKuGf8Hs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3e84c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc88b8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties42400 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'getConnection', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'getMetadataFactory', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'getExpressionBuilder', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'beginTransaction', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'getCache', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'transactional', array('func' => $func), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'commit', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->commit();
    }

    public function rollback()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'rollback', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'getClassMetadata', array('className' => $className), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'createQuery', array('dql' => $dql), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'createNamedQuery', array('name' => $name), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'createQueryBuilder', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'flush', array('entity' => $entity), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'clear', array('entityName' => $entityName), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->clear($entityName);
    }

    public function close()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'close', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->close();
    }

    public function persist($entity)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'persist', array('entity' => $entity), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'remove', array('entity' => $entity), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'refresh', array('entity' => $entity), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'detach', array('entity' => $entity), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'merge', array('entity' => $entity), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'contains', array('entity' => $entity), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'getEventManager', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'getConfiguration', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'isOpen', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'getUnitOfWork', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'getProxyFactory', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'initializeObject', array('obj' => $obj), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'getFilters', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'isFiltersStateClean', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'hasFilters', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return $this->valueHolder3e84c->hasFilters();
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

        $instance->initializerc88b8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3e84c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3e84c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3e84c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, '__get', ['name' => $name], $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        if (isset(self::$publicProperties42400[$name])) {
            return $this->valueHolder3e84c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e84c;

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

        $targetObject = $this->valueHolder3e84c;
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
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e84c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3e84c;
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
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, '__isset', array('name' => $name), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e84c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3e84c;
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
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, '__unset', array('name' => $name), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e84c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3e84c;
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
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, '__clone', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        $this->valueHolder3e84c = clone $this->valueHolder3e84c;
    }

    public function __sleep()
    {
        $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, '__sleep', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;

        return array('valueHolder3e84c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc88b8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc88b8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc88b8 && ($this->initializerc88b8->__invoke($valueHolder3e84c, $this, 'initializeProxy', array(), $this->initializerc88b8) || 1) && $this->valueHolder3e84c = $valueHolder3e84c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3e84c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3e84c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
