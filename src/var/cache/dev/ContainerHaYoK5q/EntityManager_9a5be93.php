<?php

namespace ContainerHaYoK5q;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder90516 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfd848 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf4cbc = [
        
    ];

    public function getConnection()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'getConnection', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'getMetadataFactory', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'getExpressionBuilder', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'beginTransaction', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'getCache', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'transactional', array('func' => $func), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'commit', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->commit();
    }

    public function rollback()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'rollback', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'getClassMetadata', array('className' => $className), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'createQuery', array('dql' => $dql), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'createNamedQuery', array('name' => $name), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'createQueryBuilder', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'flush', array('entity' => $entity), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'clear', array('entityName' => $entityName), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->clear($entityName);
    }

    public function close()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'close', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->close();
    }

    public function persist($entity)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'persist', array('entity' => $entity), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'remove', array('entity' => $entity), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'refresh', array('entity' => $entity), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'detach', array('entity' => $entity), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'merge', array('entity' => $entity), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'contains', array('entity' => $entity), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'getEventManager', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'getConfiguration', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'isOpen', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'getUnitOfWork', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'getProxyFactory', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'initializeObject', array('obj' => $obj), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'getFilters', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'isFiltersStateClean', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'hasFilters', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return $this->valueHolder90516->hasFilters();
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

        $instance->initializerfd848 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder90516) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder90516 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder90516->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, '__get', ['name' => $name], $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        if (isset(self::$publicPropertiesf4cbc[$name])) {
            return $this->valueHolder90516->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90516;

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

        $targetObject = $this->valueHolder90516;
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
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90516;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder90516;
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
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, '__isset', array('name' => $name), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90516;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder90516;
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
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, '__unset', array('name' => $name), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder90516;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder90516;
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
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, '__clone', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        $this->valueHolder90516 = clone $this->valueHolder90516;
    }

    public function __sleep()
    {
        $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, '__sleep', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;

        return array('valueHolder90516');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfd848 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfd848;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfd848 && ($this->initializerfd848->__invoke($valueHolder90516, $this, 'initializeProxy', array(), $this->initializerfd848) || 1) && $this->valueHolder90516 = $valueHolder90516;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder90516;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder90516;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
