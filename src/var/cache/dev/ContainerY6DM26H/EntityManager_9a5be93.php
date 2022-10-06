<?php

namespace ContainerY6DM26H;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1e56b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb910d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5ed08 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'getConnection', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'getMetadataFactory', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'getExpressionBuilder', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'beginTransaction', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'getCache', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'transactional', array('func' => $func), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'commit', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->commit();
    }

    public function rollback()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'rollback', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'getClassMetadata', array('className' => $className), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'createQuery', array('dql' => $dql), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'createNamedQuery', array('name' => $name), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'createQueryBuilder', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'flush', array('entity' => $entity), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'clear', array('entityName' => $entityName), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->clear($entityName);
    }

    public function close()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'close', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->close();
    }

    public function persist($entity)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'persist', array('entity' => $entity), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'remove', array('entity' => $entity), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'refresh', array('entity' => $entity), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'detach', array('entity' => $entity), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'merge', array('entity' => $entity), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'contains', array('entity' => $entity), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'getEventManager', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'getConfiguration', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'isOpen', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'getUnitOfWork', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'getProxyFactory', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'initializeObject', array('obj' => $obj), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'getFilters', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'isFiltersStateClean', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'hasFilters', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return $this->valueHolder1e56b->hasFilters();
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

        $instance->initializerb910d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1e56b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1e56b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1e56b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, '__get', ['name' => $name], $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        if (isset(self::$publicProperties5ed08[$name])) {
            return $this->valueHolder1e56b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e56b;

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

        $targetObject = $this->valueHolder1e56b;
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
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e56b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1e56b;
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
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, '__isset', array('name' => $name), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e56b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1e56b;
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
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, '__unset', array('name' => $name), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e56b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1e56b;
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
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, '__clone', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        $this->valueHolder1e56b = clone $this->valueHolder1e56b;
    }

    public function __sleep()
    {
        $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, '__sleep', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;

        return array('valueHolder1e56b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb910d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb910d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb910d && ($this->initializerb910d->__invoke($valueHolder1e56b, $this, 'initializeProxy', array(), $this->initializerb910d) || 1) && $this->valueHolder1e56b = $valueHolder1e56b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1e56b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1e56b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
