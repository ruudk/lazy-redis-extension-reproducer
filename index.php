<?php

declare(strict_types=1);

use ProxyManager\Configuration;
use ProxyManager\FileLocator\FileLocator;
use ProxyManager\GeneratorStrategy\FileWriterGeneratorStrategy;

include __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/stub.php';

$config = new Configuration();

$fileLocator = new FileLocator(__DIR__.'/');
$config->setGeneratorStrategy(new FileWriterGeneratorStrategy($fileLocator));

// set the directory to read the generated proxies from
$config->setProxiesTargetDir(__DIR__ . '/');

// then register the autoloader
spl_autoload_register($config->getProxyAutoloader());

// pass the configuration to proxymanager factory
$factory = new ProxyManager\Factory\LazyLoadingValueHolderFactory($config);

// Dump real Redis
$proxy = $factory->createProxy(
    Redis::class,
    function (& $wrappedObject, $proxy, $method, $parameters, & $initializer) {
        $wrappedObject = new Redis();
        $wrappedObject->connect($_SERVER['REDIS_HOST'], (int) $_SERVER['REDIS_PORT'], 3.0);

        $initializer   = null; // turning off further lazy initialization

        return true; // report success
    }
);

// Dump Stub
$factory->createProxy(
    RedisStub::class,
    function (& $wrappedObject, $proxy, $method, $parameters, & $initializer) {
        $wrappedObject = new RedisStub();
        $wrappedObject->connect($_SERVER['REDIS_HOST'], (int) $_SERVER['REDIS_PORT'], 3.0);

        $initializer   = null; // turning off further lazy initialization

        return true; // report success
    }
);

// Call on real redis
$proxy->flushAll();
