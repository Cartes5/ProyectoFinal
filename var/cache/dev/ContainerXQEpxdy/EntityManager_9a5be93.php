<?php

namespace ContainerXQEpxdy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd3e95 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8af46 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties34680 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'getConnection', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'getMetadataFactory', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'getExpressionBuilder', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'beginTransaction', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'getCache', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'transactional', array('func' => $func), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'commit', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->commit();
    }

    public function rollback()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'rollback', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'getClassMetadata', array('className' => $className), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'createQuery', array('dql' => $dql), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'createNamedQuery', array('name' => $name), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'createQueryBuilder', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'flush', array('entity' => $entity), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'clear', array('entityName' => $entityName), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->clear($entityName);
    }

    public function close()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'close', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->close();
    }

    public function persist($entity)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'persist', array('entity' => $entity), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'remove', array('entity' => $entity), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'refresh', array('entity' => $entity), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'detach', array('entity' => $entity), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'merge', array('entity' => $entity), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'contains', array('entity' => $entity), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'getEventManager', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'getConfiguration', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'isOpen', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'getUnitOfWork', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'getProxyFactory', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'initializeObject', array('obj' => $obj), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'getFilters', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'isFiltersStateClean', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'hasFilters', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return $this->valueHolderd3e95->hasFilters();
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

        $instance->initializer8af46 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd3e95) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd3e95 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd3e95->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, '__get', ['name' => $name], $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        if (isset(self::$publicProperties34680[$name])) {
            return $this->valueHolderd3e95->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd3e95;

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

        $targetObject = $this->valueHolderd3e95;
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
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd3e95;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd3e95;
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
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, '__isset', array('name' => $name), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd3e95;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd3e95;
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
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, '__unset', array('name' => $name), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd3e95;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd3e95;
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
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, '__clone', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        $this->valueHolderd3e95 = clone $this->valueHolderd3e95;
    }

    public function __sleep()
    {
        $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, '__sleep', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;

        return array('valueHolderd3e95');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8af46 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8af46;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8af46 && ($this->initializer8af46->__invoke($valueHolderd3e95, $this, 'initializeProxy', array(), $this->initializer8af46) || 1) && $this->valueHolderd3e95 = $valueHolderd3e95;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd3e95;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd3e95;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
