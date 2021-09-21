<?php

namespace Container6mfFMlq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6a00a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb2273 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4bc0d = [
        
    ];

    public function getConnection()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'getConnection', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'getMetadataFactory', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'getExpressionBuilder', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'beginTransaction', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'getCache', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'transactional', array('func' => $func), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->transactional($func);
    }

    public function commit()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'commit', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->commit();
    }

    public function rollback()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'rollback', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'getClassMetadata', array('className' => $className), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'createQuery', array('dql' => $dql), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'createNamedQuery', array('name' => $name), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'createQueryBuilder', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'flush', array('entity' => $entity), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'clear', array('entityName' => $entityName), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->clear($entityName);
    }

    public function close()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'close', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->close();
    }

    public function persist($entity)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'persist', array('entity' => $entity), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'remove', array('entity' => $entity), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'refresh', array('entity' => $entity), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'detach', array('entity' => $entity), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'merge', array('entity' => $entity), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'contains', array('entity' => $entity), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'getEventManager', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'getConfiguration', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'isOpen', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'getUnitOfWork', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'getProxyFactory', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'initializeObject', array('obj' => $obj), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'getFilters', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'isFiltersStateClean', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'hasFilters', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return $this->valueHolder6a00a->hasFilters();
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

        $instance->initializerb2273 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6a00a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6a00a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6a00a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, '__get', ['name' => $name], $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        if (isset(self::$publicProperties4bc0d[$name])) {
            return $this->valueHolder6a00a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6a00a;

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

        $targetObject = $this->valueHolder6a00a;
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
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6a00a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6a00a;
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
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, '__isset', array('name' => $name), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6a00a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6a00a;
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
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, '__unset', array('name' => $name), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6a00a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6a00a;
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
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, '__clone', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        $this->valueHolder6a00a = clone $this->valueHolder6a00a;
    }

    public function __sleep()
    {
        $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, '__sleep', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;

        return array('valueHolder6a00a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb2273 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb2273;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb2273 && ($this->initializerb2273->__invoke($valueHolder6a00a, $this, 'initializeProxy', array(), $this->initializerb2273) || 1) && $this->valueHolder6a00a = $valueHolder6a00a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6a00a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6a00a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
