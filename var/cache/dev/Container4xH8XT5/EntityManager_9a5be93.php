<?php

namespace Container4xH8XT5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0dd48 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer33948 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesec546 = [
        
    ];

    public function getConnection()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'getConnection', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'getMetadataFactory', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'getExpressionBuilder', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'beginTransaction', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'getCache', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->getCache();
    }

    public function transactional($func)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'transactional', array('func' => $func), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->transactional($func);
    }

    public function commit()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'commit', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->commit();
    }

    public function rollback()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'rollback', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'getClassMetadata', array('className' => $className), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'createQuery', array('dql' => $dql), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'createNamedQuery', array('name' => $name), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'createQueryBuilder', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'flush', array('entity' => $entity), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'clear', array('entityName' => $entityName), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->clear($entityName);
    }

    public function close()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'close', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->close();
    }

    public function persist($entity)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'persist', array('entity' => $entity), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'remove', array('entity' => $entity), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'refresh', array('entity' => $entity), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'detach', array('entity' => $entity), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'merge', array('entity' => $entity), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'getRepository', array('entityName' => $entityName), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'contains', array('entity' => $entity), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'getEventManager', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'getConfiguration', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'isOpen', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'getUnitOfWork', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'getProxyFactory', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'initializeObject', array('obj' => $obj), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'getFilters', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'isFiltersStateClean', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'hasFilters', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return $this->valueHolder0dd48->hasFilters();
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

        $instance->initializer33948 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0dd48) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0dd48 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0dd48->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, '__get', ['name' => $name], $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        if (isset(self::$publicPropertiesec546[$name])) {
            return $this->valueHolder0dd48->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0dd48;

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

        $targetObject = $this->valueHolder0dd48;
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
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0dd48;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0dd48;
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
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, '__isset', array('name' => $name), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0dd48;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0dd48;
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
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, '__unset', array('name' => $name), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0dd48;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0dd48;
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
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, '__clone', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        $this->valueHolder0dd48 = clone $this->valueHolder0dd48;
    }

    public function __sleep()
    {
        $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, '__sleep', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;

        return array('valueHolder0dd48');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer33948 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer33948;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer33948 && ($this->initializer33948->__invoke($valueHolder0dd48, $this, 'initializeProxy', array(), $this->initializer33948) || 1) && $this->valueHolder0dd48 = $valueHolder0dd48;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0dd48;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0dd48;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
