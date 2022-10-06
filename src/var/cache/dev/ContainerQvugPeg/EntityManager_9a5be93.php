<?php

namespace ContainerQvugPeg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderae115 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer83e59 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties43aa9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'getConnection', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'getMetadataFactory', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'getExpressionBuilder', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'beginTransaction', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'getCache', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->getCache();
    }

    public function transactional($func)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'transactional', array('func' => $func), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'wrapInTransaction', array('func' => $func), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'commit', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->commit();
    }

    public function rollback()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'rollback', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'getClassMetadata', array('className' => $className), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'createQuery', array('dql' => $dql), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'createNamedQuery', array('name' => $name), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'createQueryBuilder', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'flush', array('entity' => $entity), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'clear', array('entityName' => $entityName), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->clear($entityName);
    }

    public function close()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'close', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->close();
    }

    public function persist($entity)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'persist', array('entity' => $entity), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'remove', array('entity' => $entity), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'refresh', array('entity' => $entity), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'detach', array('entity' => $entity), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'merge', array('entity' => $entity), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'getRepository', array('entityName' => $entityName), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'contains', array('entity' => $entity), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'getEventManager', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'getConfiguration', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'isOpen', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'getUnitOfWork', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'getProxyFactory', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'initializeObject', array('obj' => $obj), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'getFilters', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'isFiltersStateClean', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'hasFilters', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return $this->valueHolderae115->hasFilters();
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

        $instance->initializer83e59 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderae115) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderae115 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderae115->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, '__get', ['name' => $name], $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        if (isset(self::$publicProperties43aa9[$name])) {
            return $this->valueHolderae115->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderae115;

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

        $targetObject = $this->valueHolderae115;
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
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderae115;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderae115;
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
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, '__isset', array('name' => $name), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderae115;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderae115;
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
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, '__unset', array('name' => $name), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderae115;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderae115;
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
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, '__clone', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        $this->valueHolderae115 = clone $this->valueHolderae115;
    }

    public function __sleep()
    {
        $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, '__sleep', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;

        return array('valueHolderae115');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer83e59 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer83e59;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer83e59 && ($this->initializer83e59->__invoke($valueHolderae115, $this, 'initializeProxy', array(), $this->initializer83e59) || 1) && $this->valueHolderae115 = $valueHolderae115;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderae115;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderae115;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
