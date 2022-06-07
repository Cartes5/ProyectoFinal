<?php

namespace ContainerXNxWl2N;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder234ce = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer63afb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescd11a = [
        
    ];

    public function getConnection()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'getConnection', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'getMetadataFactory', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'getExpressionBuilder', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'beginTransaction', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'getCache', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->getCache();
    }

    public function transactional($func)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'transactional', array('func' => $func), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'wrapInTransaction', array('func' => $func), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'commit', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->commit();
    }

    public function rollback()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'rollback', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'getClassMetadata', array('className' => $className), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'createQuery', array('dql' => $dql), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'createNamedQuery', array('name' => $name), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'createQueryBuilder', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'flush', array('entity' => $entity), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'clear', array('entityName' => $entityName), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->clear($entityName);
    }

    public function close()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'close', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->close();
    }

    public function persist($entity)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'persist', array('entity' => $entity), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'remove', array('entity' => $entity), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'refresh', array('entity' => $entity), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'detach', array('entity' => $entity), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'merge', array('entity' => $entity), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'getRepository', array('entityName' => $entityName), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'contains', array('entity' => $entity), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'getEventManager', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'getConfiguration', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'isOpen', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'getUnitOfWork', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'getProxyFactory', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'initializeObject', array('obj' => $obj), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'getFilters', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'isFiltersStateClean', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'hasFilters', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return $this->valueHolder234ce->hasFilters();
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

        $instance->initializer63afb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder234ce) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder234ce = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder234ce->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, '__get', ['name' => $name], $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        if (isset(self::$publicPropertiescd11a[$name])) {
            return $this->valueHolder234ce->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder234ce;

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

        $targetObject = $this->valueHolder234ce;
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
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder234ce;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder234ce;
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
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, '__isset', array('name' => $name), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder234ce;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder234ce;
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
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, '__unset', array('name' => $name), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder234ce;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder234ce;
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
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, '__clone', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        $this->valueHolder234ce = clone $this->valueHolder234ce;
    }

    public function __sleep()
    {
        $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, '__sleep', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;

        return array('valueHolder234ce');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer63afb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer63afb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer63afb && ($this->initializer63afb->__invoke($valueHolder234ce, $this, 'initializeProxy', array(), $this->initializer63afb) || 1) && $this->valueHolder234ce = $valueHolder234ce;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder234ce;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder234ce;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
