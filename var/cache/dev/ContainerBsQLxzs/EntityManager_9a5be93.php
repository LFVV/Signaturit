<?php

namespace ContainerBsQLxzs;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera5972 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer00361 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbf162 = [
        
    ];

    public function getConnection()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'getConnection', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'getMetadataFactory', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'getExpressionBuilder', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'beginTransaction', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'getCache', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->getCache();
    }

    public function transactional($func)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'transactional', array('func' => $func), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'wrapInTransaction', array('func' => $func), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'commit', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->commit();
    }

    public function rollback()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'rollback', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'getClassMetadata', array('className' => $className), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'createQuery', array('dql' => $dql), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'createNamedQuery', array('name' => $name), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'createQueryBuilder', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'flush', array('entity' => $entity), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'clear', array('entityName' => $entityName), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->clear($entityName);
    }

    public function close()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'close', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->close();
    }

    public function persist($entity)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'persist', array('entity' => $entity), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'remove', array('entity' => $entity), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'refresh', array('entity' => $entity), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'detach', array('entity' => $entity), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'merge', array('entity' => $entity), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'getRepository', array('entityName' => $entityName), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'contains', array('entity' => $entity), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'getEventManager', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'getConfiguration', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'isOpen', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'getUnitOfWork', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'getProxyFactory', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'initializeObject', array('obj' => $obj), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'getFilters', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'isFiltersStateClean', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'hasFilters', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return $this->valueHoldera5972->hasFilters();
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

        $instance->initializer00361 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera5972) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera5972 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera5972->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, '__get', ['name' => $name], $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        if (isset(self::$publicPropertiesbf162[$name])) {
            return $this->valueHoldera5972->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5972;

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

        $targetObject = $this->valueHoldera5972;
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
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5972;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera5972;
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
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, '__isset', array('name' => $name), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5972;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera5972;
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
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, '__unset', array('name' => $name), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5972;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera5972;
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
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, '__clone', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        $this->valueHoldera5972 = clone $this->valueHoldera5972;
    }

    public function __sleep()
    {
        $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, '__sleep', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;

        return array('valueHoldera5972');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer00361 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer00361;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer00361 && ($this->initializer00361->__invoke($valueHoldera5972, $this, 'initializeProxy', array(), $this->initializer00361) || 1) && $this->valueHoldera5972 = $valueHoldera5972;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera5972;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera5972;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
