<?php

namespace ContainerSY5zgAB;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2c650 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer71124 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties46c80 = [
        
    ];

    public function getConnection()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'getConnection', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'getMetadataFactory', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'getExpressionBuilder', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'beginTransaction', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'getCache', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->getCache();
    }

    public function transactional($func)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'transactional', array('func' => $func), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'wrapInTransaction', array('func' => $func), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'commit', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->commit();
    }

    public function rollback()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'rollback', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'getClassMetadata', array('className' => $className), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'createQuery', array('dql' => $dql), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'createNamedQuery', array('name' => $name), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'createQueryBuilder', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'flush', array('entity' => $entity), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'clear', array('entityName' => $entityName), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->clear($entityName);
    }

    public function close()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'close', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->close();
    }

    public function persist($entity)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'persist', array('entity' => $entity), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'remove', array('entity' => $entity), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'refresh', array('entity' => $entity), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'detach', array('entity' => $entity), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'merge', array('entity' => $entity), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'getRepository', array('entityName' => $entityName), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'contains', array('entity' => $entity), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'getEventManager', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'getConfiguration', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'isOpen', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'getUnitOfWork', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'getProxyFactory', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'initializeObject', array('obj' => $obj), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'getFilters', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'isFiltersStateClean', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'hasFilters', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return $this->valueHolder2c650->hasFilters();
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

        $instance->initializer71124 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder2c650) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2c650 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2c650->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, '__get', ['name' => $name], $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        if (isset(self::$publicProperties46c80[$name])) {
            return $this->valueHolder2c650->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c650;

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

        $targetObject = $this->valueHolder2c650;
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
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c650;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2c650;
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
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, '__isset', array('name' => $name), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c650;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2c650;
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
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, '__unset', array('name' => $name), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c650;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2c650;
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
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, '__clone', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        $this->valueHolder2c650 = clone $this->valueHolder2c650;
    }

    public function __sleep()
    {
        $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, '__sleep', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;

        return array('valueHolder2c650');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer71124 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer71124;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer71124 && ($this->initializer71124->__invoke($valueHolder2c650, $this, 'initializeProxy', array(), $this->initializer71124) || 1) && $this->valueHolder2c650 = $valueHolder2c650;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2c650;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2c650;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
