<?php

namespace ContainerX7vsK2c;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1ff0b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4d134 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties03f23 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'getConnection', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'getMetadataFactory', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'getExpressionBuilder', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'beginTransaction', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'getCache', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'transactional', array('func' => $func), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->transactional($func);
    }

    public function commit()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'commit', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->commit();
    }

    public function rollback()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'rollback', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'getClassMetadata', array('className' => $className), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'createQuery', array('dql' => $dql), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'createNamedQuery', array('name' => $name), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'createQueryBuilder', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'flush', array('entity' => $entity), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'clear', array('entityName' => $entityName), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->clear($entityName);
    }

    public function close()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'close', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->close();
    }

    public function persist($entity)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'persist', array('entity' => $entity), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'remove', array('entity' => $entity), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'refresh', array('entity' => $entity), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'detach', array('entity' => $entity), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'merge', array('entity' => $entity), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'contains', array('entity' => $entity), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'getEventManager', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'getConfiguration', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'isOpen', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'getUnitOfWork', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'getProxyFactory', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'initializeObject', array('obj' => $obj), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'getFilters', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'isFiltersStateClean', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'hasFilters', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return $this->valueHolder1ff0b->hasFilters();
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

        $instance->initializer4d134 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1ff0b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1ff0b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1ff0b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, '__get', ['name' => $name], $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        if (isset(self::$publicProperties03f23[$name])) {
            return $this->valueHolder1ff0b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ff0b;

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

        $targetObject = $this->valueHolder1ff0b;
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
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ff0b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1ff0b;
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
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, '__isset', array('name' => $name), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ff0b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1ff0b;
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
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, '__unset', array('name' => $name), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ff0b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1ff0b;
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
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, '__clone', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        $this->valueHolder1ff0b = clone $this->valueHolder1ff0b;
    }

    public function __sleep()
    {
        $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, '__sleep', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;

        return array('valueHolder1ff0b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4d134 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4d134;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4d134 && ($this->initializer4d134->__invoke($valueHolder1ff0b, $this, 'initializeProxy', array(), $this->initializer4d134) || 1) && $this->valueHolder1ff0b = $valueHolder1ff0b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1ff0b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1ff0b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
