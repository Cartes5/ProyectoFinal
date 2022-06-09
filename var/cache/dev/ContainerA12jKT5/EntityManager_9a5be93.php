<?php

namespace ContainerA12jKT5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercc656 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf3cdb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6b5b9 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'getConnection', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'getMetadataFactory', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'getExpressionBuilder', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'beginTransaction', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'getCache', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'transactional', array('func' => $func), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'commit', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->commit();
    }

    public function rollback()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'rollback', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'getClassMetadata', array('className' => $className), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'createQuery', array('dql' => $dql), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'createNamedQuery', array('name' => $name), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'createQueryBuilder', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'flush', array('entity' => $entity), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'clear', array('entityName' => $entityName), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->clear($entityName);
    }

    public function close()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'close', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->close();
    }

    public function persist($entity)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'persist', array('entity' => $entity), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'remove', array('entity' => $entity), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'refresh', array('entity' => $entity), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'detach', array('entity' => $entity), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'merge', array('entity' => $entity), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'contains', array('entity' => $entity), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'getEventManager', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'getConfiguration', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'isOpen', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'getUnitOfWork', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'getProxyFactory', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'initializeObject', array('obj' => $obj), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'getFilters', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'isFiltersStateClean', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'hasFilters', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return $this->valueHoldercc656->hasFilters();
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

        $instance->initializerf3cdb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercc656) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercc656 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercc656->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, '__get', ['name' => $name], $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        if (isset(self::$publicProperties6b5b9[$name])) {
            return $this->valueHoldercc656->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc656;

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

        $targetObject = $this->valueHoldercc656;
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
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc656;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercc656;
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
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, '__isset', array('name' => $name), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc656;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercc656;
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
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, '__unset', array('name' => $name), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc656;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercc656;
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
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, '__clone', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        $this->valueHoldercc656 = clone $this->valueHoldercc656;
    }

    public function __sleep()
    {
        $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, '__sleep', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;

        return array('valueHoldercc656');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf3cdb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf3cdb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf3cdb && ($this->initializerf3cdb->__invoke($valueHoldercc656, $this, 'initializeProxy', array(), $this->initializerf3cdb) || 1) && $this->valueHoldercc656 = $valueHoldercc656;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercc656;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercc656;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
