<?php

namespace ProxyManagerGeneratedProxy\__PM__\RedisStub;

class Generated0e54f8ff345fb3fa5e6eb6a01e83423e extends \RedisStub implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \RedisStub|null wrapped object, if the proxy is initialized
     */
    private $valueHolder12061 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer342a0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties26a59 = [
        
    ];

    private static $signature0e54f8ff345fb3fa5e6eb6a01e83423e = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czo5OiJSZWRpc1N0dWIiO3M6NzoiZmFjdG9yeSI7czo1MDoiUHJveHlNYW5hZ2VyXEZhY3RvcnlcTGF6eUxvYWRpbmdWYWx1ZUhvbGRlckZhY3RvcnkiO3M6MTk6InByb3h5TWFuYWdlclZlcnNpb24iO3M6NDc6InYxLjAuNUAwMDZhYTVkMzJmODg3YTRkYjQzNTNiMTNiNWI1MDk1NjEzZTA2MTFmIjtzOjEyOiJwcm94eU9wdGlvbnMiO2E6MDp7fX0=';

    public function _compress(string $value) : string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '_compress', array('value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->_compress($value);
    }

    public function __destruct()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '__destruct', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->__destruct();
    }

    public function _pack(mixed $value) : string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '_pack', array('value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->_pack($value);
    }

    public function _prefix(string $key) : string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '_prefix', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->_prefix($key);
    }

    public function _serialize(mixed $value) : string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '_serialize', array('value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->_serialize($value);
    }

    public function _uncompress(string $value) : string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '_uncompress', array('value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->_uncompress($value);
    }

    public function _unpack(string $value) : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '_unpack', array('value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->_unpack($value);
    }

    public function _unserialize(string $value) : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '_unserialize', array('value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->_unserialize($value);
    }

    public function acl(string $subcmd, ... $args)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'acl', array('subcmd' => $subcmd, 'args' => $args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->acl($subcmd, ...$args);
    }

    public function append(string $key, mixed $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'append', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->append($key, $value);
    }

    public function auth(mixed $credentials) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'auth', array('credentials' => $credentials), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->auth($credentials);
    }

    public function bgSave() : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'bgSave', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->bgSave();
    }

    public function bgrewriteaof() : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'bgrewriteaof', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->bgrewriteaof();
    }

    public function bitcount(string $key, int $start = 0, int $end = -1)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'bitcount', array('key' => $key, 'start' => $start, 'end' => $end), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->bitcount($key, $start, $end);
    }

    public function bitop(string $operation, string $deskey, string $srckey, string ... $other_keys) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'bitop', array('operation' => $operation, 'deskey' => $deskey, 'srckey' => $srckey, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->bitop($operation, $deskey, $srckey, ...$other_keys);
    }

    public function bitpos(string $key, int $bit, int $start = 0, int $end = -1)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'bitpos', array('key' => $key, 'bit' => $bit, 'start' => $start, 'end' => $end), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->bitpos($key, $bit, $start, $end);
    }

    public function blPop(string|array $key, int|string $timeout_or_key, mixed ... $extra_args) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'blPop', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->blPop($key, $timeout_or_key, ...$extra_args);
    }

    public function brPop(string|array $key, int|string $timeout_or_key, mixed ... $extra_args) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'brPop', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->brPop($key, $timeout_or_key, ...$extra_args);
    }

    public function brpoplpush(string $src, string $dst, int $timeout) : string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'brpoplpush', array('src' => $src, 'dst' => $dst, 'timeout' => $timeout), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->brpoplpush($src, $dst, $timeout);
    }

    public function bzPopMax(string|array $key, int|string $timeout_or_key, mixed ... $extra_args) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'bzPopMax', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->bzPopMax($key, $timeout_or_key, ...$extra_args);
    }

    public function bzPopMin(string|array $key, int|string $timeout_or_key, mixed ... $extra_args) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'bzPopMin', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->bzPopMin($key, $timeout_or_key, ...$extra_args);
    }

    public function clearLastError() : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'clearLastError', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->clearLastError();
    }

    public function client(string $opt, ?string $arg = null) : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'client', array('opt' => $opt, 'arg' => $arg), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->client($opt, $arg);
    }

    public function close() : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'close', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->close();
    }

    public function command(?string $opt, string|array $arg) : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'command', array('opt' => $opt, 'arg' => $arg), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->command($opt, $arg);
    }

    public function config(string $operation, string $key, mixed $value = null) : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'config', array('operation' => $operation, 'key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->config($operation, $key, $value);
    }

    public function connect(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'connect', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->connect($host, $port, $timeout, $persistent_id, $retry_interval, $read_timeout, $context);
    }

    public function copy(string $src, string $dst, ?array $options = null) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'copy', array('src' => $src, 'dst' => $dst, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->copy($src, $dst, $options);
    }

    public function dbSize() : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'dbSize', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->dbSize();
    }

    public function debug(string $key) : string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'debug', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->debug($key);
    }

    public function decr(string $key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'decr', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->decr($key);
    }

    public function decrBy(string $key, int $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'decrBy', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->decrBy($key, $value);
    }

    public function del(string|array $key, string ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'del', array('key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->del($key, ...$other_keys);
    }

    public function delete(string|array $key, string ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'delete', array('key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->delete($key, ...$other_keys);
    }

    public function discard() : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'discard', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->discard();
    }

    public function dump(string $key) : string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'dump', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->dump($key);
    }

    public function echo(string $str)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'echo', array('str' => $str), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->echo($str);
    }

    public function eval(string $script, ?array $keys = null, int $num_keys = 0) : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'eval', array('script' => $script, 'keys' => $keys, 'num_keys' => $num_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->eval($script, $keys, $num_keys);
    }

    public function evalsha(string $sha1, ?array $keys = null, int $num_keys = 0) : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'evalsha', array('sha1' => $sha1, 'keys' => $keys, 'num_keys' => $num_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->evalsha($sha1, $keys, $num_keys);
    }

    public function exec() : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'exec', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->exec();
    }

    public function exists(string $key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'exists', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->exists($key);
    }

    public function expire(string $key, int $timeout) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'expire', array('key' => $key, 'timeout' => $timeout), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->expire($key, $timeout);
    }

    public function expireAt(string $key, int $timestamp) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'expireAt', array('key' => $key, 'timestamp' => $timestamp), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->expireAt($key, $timestamp);
    }

    public function flushAll(bool $async = false) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'flushAll', array('async' => $async), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->flushAll($async);
    }

    public function flushDB(bool $async = false) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'flushDB', array('async' => $async), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->flushDB($async);
    }

    public function geoadd(string $key, float $lng, float $lat, string $member, mixed ... $other_triples) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'geoadd', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'member' => $member, 'other_triples' => $other_triples), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->geoadd($key, $lng, $lat, $member, ...$other_triples);
    }

    public function geodist(string $key, string $src, string $dst, ?string $unit = null) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'geodist', array('key' => $key, 'src' => $src, 'dst' => $dst, 'unit' => $unit), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->geodist($key, $src, $dst, $unit);
    }

    public function geohash(string $key, string $member, string ... $other_members) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'geohash', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->geohash($key, $member, ...$other_members);
    }

    public function geopos(string $key, string $member, string ... $other_members) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'geopos', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->geopos($key, $member, ...$other_members);
    }

    public function georadius(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'georadius', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->georadius($key, $lng, $lat, $radius, $unit, $options);
    }

    public function georadius_ro(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'georadius_ro', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->georadius_ro($key, $lng, $lat, $radius, $unit, $options);
    }

    public function georadiusbymember(string $key, string $member, float $radius, string $unit, array $options = []) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'georadiusbymember', array('key' => $key, 'member' => $member, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->georadiusbymember($key, $member, $radius, $unit, $options);
    }

    public function georadiusbymember_ro(string $key, string $member, float $radius, string $unit, array $options = []) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'georadiusbymember_ro', array('key' => $key, 'member' => $member, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->georadiusbymember_ro($key, $member, $radius, $unit, $options);
    }

    public function geosearch(string $key, string|array $position, int|float|array $shape, string $unit, array $options = []) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'geosearch', array('key' => $key, 'position' => $position, 'shape' => $shape, 'unit' => $unit, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->geosearch($key, $position, $shape, $unit, $options);
    }

    public function geosearchstore(string $dst, string $src, string|array $position, int|float|array $shape, string $unit, array $options = []) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'geosearchstore', array('dst' => $dst, 'src' => $src, 'position' => $position, 'shape' => $shape, 'unit' => $unit, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->geosearchstore($dst, $src, $position, $shape, $unit, $options);
    }

    public function get(string $key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'get', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->get($key);
    }

    public function getAuth() : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getAuth', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getAuth();
    }

    public function getBit(string $key, int $idx)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getBit', array('key' => $key, 'idx' => $idx), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getBit($key, $idx);
    }

    public function getDBNum() : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getDBNum', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getDBNum();
    }

    public function getHost() : string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getHost', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getHost();
    }

    public function getLastError() : ?string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getLastError', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getLastError();
    }

    public function getMode() : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getMode', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getMode();
    }

    public function getOption(int $option) : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getOption', array('option' => $option), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getOption($option);
    }

    public function getPersistentID() : ?string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getPersistentID', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getPersistentID();
    }

    public function getPort() : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getPort', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getPort();
    }

    public function getRange(string $key, int $start, int $end)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getRange', array('key' => $key, 'start' => $start, 'end' => $end), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getRange($key, $start, $end);
    }

    public function getReadTimeout() : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getReadTimeout', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getReadTimeout();
    }

    public function getset(string $key, mixed $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getset', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getset($key, $value);
    }

    public function getTimeout() : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getTimeout', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getTimeout();
    }

    public function hDel(string $key, string $member, string ... $other_members) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hDel', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hDel($key, $member, ...$other_members);
    }

    public function hExists(string $key, string $member) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hExists', array('key' => $key, 'member' => $member), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hExists($key, $member);
    }

    public function hGet(string $key, string $member) : string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hGet', array('key' => $key, 'member' => $member), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hGet($key, $member);
    }

    public function hGetAll(string $key) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hGetAll', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hGetAll($key);
    }

    public function hIncrBy(string $key, string $member, int $value) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hIncrBy', array('key' => $key, 'member' => $member, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hIncrBy($key, $member, $value);
    }

    public function hIncrByFloat(string $key, string $member, float $value) : float
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hIncrByFloat', array('key' => $key, 'member' => $member, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hIncrByFloat($key, $member, $value);
    }

    public function hKeys(string $key) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hKeys', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hKeys($key);
    }

    public function hLen(string $key) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hLen', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hLen($key);
    }

    public function hMget(string $key, array $keys) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hMget', array('key' => $key, 'keys' => $keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hMget($key, $keys);
    }

    public function hMset(string $key, array $keyvals) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hMset', array('key' => $key, 'keyvals' => $keyvals), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hMset($key, $keyvals);
    }

    public function hSet(string $key, string $member, string $value) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hSet', array('key' => $key, 'member' => $member, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hSet($key, $member, $value);
    }

    public function hSetNx(string $key, string $member, string $value) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hSetNx', array('key' => $key, 'member' => $member, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hSetNx($key, $member, $value);
    }

    public function hStrLen(string $key, string $member) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hStrLen', array('key' => $key, 'member' => $member), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hStrLen($key, $member);
    }

    public function hVals(string $key) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hVals', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hVals($key);
    }

    public function hscan(string $key, int &$iterator, ?string $pattern = null, int $count = 0) : bool|array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hscan', array('key' => $key, 'iterator' => $iterator, 'pattern' => $pattern, 'count' => $count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hscan($key, $iterator, $pattern, $count);
    }

    public function incr(string $key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'incr', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->incr($key);
    }

    public function incrBy(string $key, int $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'incrBy', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->incrBy($key, $value);
    }

    public function incrByFloat(string $key, float $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'incrByFloat', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->incrByFloat($key, $value);
    }

    public function info(?string $opt = null) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'info', array('opt' => $opt), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->info($opt);
    }

    public function isConnected() : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'isConnected', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->isConnected();
    }

    public function keys(string $pattern)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'keys', array('pattern' => $pattern), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->keys($pattern);
    }

    public function lInsert(string $key, string $pos, mixed $pivot, mixed $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lInsert', array('key' => $key, 'pos' => $pos, 'pivot' => $pivot, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lInsert($key, $pos, $pivot, $value);
    }

    public function lLen(string $key) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lLen', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lLen($key);
    }

    public function lMove(string $src, string $dst, string $wherefrom, string $whereto) : string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lMove', array('src' => $src, 'dst' => $dst, 'wherefrom' => $wherefrom, 'whereto' => $whereto), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lMove($src, $dst, $wherefrom, $whereto);
    }

    public function lPop(string $key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lPop', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lPop($key);
    }

    public function lPush(string $key, ... $elements)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lPush', array('key' => $key, 'elements' => $elements), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lPush($key, ...$elements);
    }

    public function rPush(string $key, ... $elements)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'rPush', array('key' => $key, 'elements' => $elements), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->rPush($key, ...$elements);
    }

    public function lPushx(string $key, mixed $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lPushx', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lPushx($key, $value);
    }

    public function rPushx(string $key, mixed $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'rPushx', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->rPushx($key, $value);
    }

    public function lSet(string $key, int $index, string $value) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lSet', array('key' => $key, 'index' => $index, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lSet($key, $index, $value);
    }

    public function lastSave() : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lastSave', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lastSave();
    }

    public function lindex(string $key, int $index) : string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lindex', array('key' => $key, 'index' => $index), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lindex($key, $index);
    }

    public function lrange(string $key, int $start, int $end) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lrange', array('key' => $key, 'start' => $start, 'end' => $end), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lrange($key, $start, $end);
    }

    public function lrem(string $key, string $value, int $count = 0) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lrem', array('key' => $key, 'value' => $value, 'count' => $count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lrem($key, $value, $count);
    }

    public function ltrim(string $key, int $start, int $end) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'ltrim', array('key' => $key, 'start' => $start, 'end' => $end), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->ltrim($key, $start, $end);
    }

    public function mget(array $keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'mget', array('keys' => $keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->mget($keys);
    }

    public function migrate(string $host, int $port, string $key, string $dst, int $timeout, bool $copy = false, bool $replace = false) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'migrate', array('host' => $host, 'port' => $port, 'key' => $key, 'dst' => $dst, 'timeout' => $timeout, 'copy' => $copy, 'replace' => $replace), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->migrate($host, $port, $key, $dst, $timeout, $copy, $replace);
    }

    public function move(string $key, int $index) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'move', array('key' => $key, 'index' => $index), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->move($key, $index);
    }

    public function mset(array $key_values) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'mset', array('key_values' => $key_values), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->mset($key_values);
    }

    public function msetnx(array $key_values) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'msetnx', array('key_values' => $key_values), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->msetnx($key_values);
    }

    public function multi(int $value = 1) : \Redis|bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'multi', array('value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->multi($value);
    }

    public function object(string $subcommand, string $key) : int|string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'object', array('subcommand' => $subcommand, 'key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->object($subcommand, $key);
    }

    public function open(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'open', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->open($host, $port, $timeout, $persistent_id, $retry_interval, $read_timeout, $context);
    }

    public function pconnect(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pconnect', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pconnect($host, $port, $timeout, $persistent_id, $retry_interval, $read_timeout, $context);
    }

    public function persist(string $key) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'persist', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->persist($key);
    }

    public function pexpire(string $key, int $timeout) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pexpire', array('key' => $key, 'timeout' => $timeout), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pexpire($key, $timeout);
    }

    public function pexpireAt(string $key, int $timestamp) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pexpireAt', array('key' => $key, 'timestamp' => $timestamp), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pexpireAt($key, $timestamp);
    }

    public function pfadd(string $key, array $elements) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pfadd', array('key' => $key, 'elements' => $elements), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pfadd($key, $elements);
    }

    public function pfcount(string $key) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pfcount', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pfcount($key);
    }

    public function pfmerge(string $dst, array $keys) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pfmerge', array('dst' => $dst, 'keys' => $keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pfmerge($dst, $keys);
    }

    public function ping(?string $key = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'ping', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->ping($key);
    }

    public function pipeline() : \Redis|bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pipeline', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pipeline();
    }

    public function popen(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'popen', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->popen($host, $port, $timeout, $persistent_id, $retry_interval, $read_timeout, $context);
    }

    public function psetex(string $key, int $expire, mixed $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'psetex', array('key' => $key, 'expire' => $expire, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->psetex($key, $expire, $value);
    }

    public function psubscribe(array $patterns) : void
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'psubscribe', array('patterns' => $patterns), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        $this->valueHolder12061->psubscribe($patterns);
return;
    }

    public function pttl(string $key) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pttl', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pttl($key);
    }

    public function publish(string $channel, string $message) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'publish', array('channel' => $channel, 'message' => $message), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->publish($channel, $message);
    }

    public function pubsub(string $command, mixed $arg = null) : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pubsub', array('command' => $command, 'arg' => $arg), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pubsub($command, $arg);
    }

    public function punsubscribe(array $patterns) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'punsubscribe', array('patterns' => $patterns), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->punsubscribe($patterns);
    }

    public function rPop(string $key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'rPop', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->rPop($key);
    }

    public function randomKey()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'randomKey', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->randomKey();
    }

    public function rawcommand(string $command, mixed ... $args) : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'rawcommand', array('command' => $command, 'args' => $args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->rawcommand($command, ...$args);
    }

    public function rename(string $key_src, string $key_dst)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'rename', array('key_src' => $key_src, 'key_dst' => $key_dst), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->rename($key_src, $key_dst);
    }

    public function renameNx(string $key_src, string $key_dst)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'renameNx', array('key_src' => $key_src, 'key_dst' => $key_dst), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->renameNx($key_src, $key_dst);
    }

    public function restore(string $key, int $timeout, string $value) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'restore', array('key' => $key, 'timeout' => $timeout, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->restore($key, $timeout, $value);
    }

    public function role() : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'role', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->role();
    }

    public function rpoplpush(string $src, string $dst) : string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'rpoplpush', array('src' => $src, 'dst' => $dst), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->rpoplpush($src, $dst);
    }

    public function sAdd(string $key, mixed $value, mixed ... $other_values) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sAdd', array('key' => $key, 'value' => $value, 'other_values' => $other_values), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sAdd($key, $value, ...$other_values);
    }

    public function sAddArray(string $key, array $values) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sAddArray', array('key' => $key, 'values' => $values), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sAddArray($key, $values);
    }

    public function sDiff(string $key, string ... $other_keys) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sDiff', array('key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sDiff($key, ...$other_keys);
    }

    public function sDiffStore(string $dst, string $key, string ... $other_keys) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sDiffStore', array('dst' => $dst, 'key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sDiffStore($dst, $key, ...$other_keys);
    }

    public function sInter(string $key, string ... $other_keys) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sInter', array('key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sInter($key, ...$other_keys);
    }

    public function sInterStore(string $dst, string $key, string ... $other_keys) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sInterStore', array('dst' => $dst, 'key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sInterStore($dst, $key, ...$other_keys);
    }

    public function sMembers(string $key) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sMembers', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sMembers($key);
    }

    public function sMisMember(string $key, string $member, string ... $other_members) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sMisMember', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sMisMember($key, $member, ...$other_members);
    }

    public function sMove(string $src, string $dst, mixed $value) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sMove', array('src' => $src, 'dst' => $dst, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sMove($src, $dst, $value);
    }

    public function sPop(string $key, int $count = 0) : string|array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sPop', array('key' => $key, 'count' => $count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sPop($key, $count);
    }

    public function sRandMember(string $key, int $count = 0) : string|array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sRandMember', array('key' => $key, 'count' => $count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sRandMember($key, $count);
    }

    public function sUnion(string $key, string ... $other_keys) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sUnion', array('key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sUnion($key, ...$other_keys);
    }

    public function sUnionStore(string $dst, string $key, string ... $other_keys) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sUnionStore', array('dst' => $dst, 'key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sUnionStore($dst, $key, ...$other_keys);
    }

    public function save() : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'save', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->save();
    }

    public function scan(int &$iterator, ?string $pattern = null, int $count = 0) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'scan', array('iterator' => $iterator, 'pattern' => $pattern, 'count' => $count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->scan($iterator, $pattern, $count);
    }

    public function scard(string $key) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'scard', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->scard($key);
    }

    public function script(string $command, mixed ... $args) : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'script', array('command' => $command, 'args' => $args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->script($command, ...$args);
    }

    public function select(int $db) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'select', array('db' => $db), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->select($db);
    }

    public function set(string $key, mixed $value, mixed $opt = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'set', array('key' => $key, 'value' => $value, 'opt' => $opt), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->set($key, $value, $opt);
    }

    public function setBit(string $key, int $idx, bool $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'setBit', array('key' => $key, 'idx' => $idx, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->setBit($key, $idx, $value);
    }

    public function setRange(string $key, int $start, string $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'setRange', array('key' => $key, 'start' => $start, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->setRange($key, $start, $value);
    }

    public function setOption(int $option, mixed $value) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'setOption', array('option' => $option, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->setOption($option, $value);
    }

    public function setex(string $key, int $expire, mixed $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'setex', array('key' => $key, 'expire' => $expire, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->setex($key, $expire, $value);
    }

    public function setnx(string $key, mixed $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'setnx', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->setnx($key, $value);
    }

    public function sismember(string $key, string $value) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sismember', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sismember($key, $value);
    }

    public function slaveof(?string $host = null, int $port = 6379) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'slaveof', array('host' => $host, 'port' => $port), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->slaveof($host, $port);
    }

    public function slowlog(string $mode, int $option = 0) : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'slowlog', array('mode' => $mode, 'option' => $option), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->slowlog($mode, $option);
    }

    public function sort(string $key, ?array $options = null) : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sort', array('key' => $key, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sort($key, $options);
    }

    public function sortAsc(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sortAsc', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sortAsc($key, $pattern, $get, $offset, $count, $store);
    }

    public function sortAscAlpha(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sortAscAlpha', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sortAscAlpha($key, $pattern, $get, $offset, $count, $store);
    }

    public function sortDesc(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sortDesc', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sortDesc($key, $pattern, $get, $offset, $count, $store);
    }

    public function sortDescAlpha(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sortDescAlpha', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sortDescAlpha($key, $pattern, $get, $offset, $count, $store);
    }

    public function srem(string $key, string $value, string ... $other_values) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'srem', array('key' => $key, 'value' => $value, 'other_values' => $other_values), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->srem($key, $value, ...$other_values);
    }

    public function sscan(string $key, int &$iterator, ?string $pattern = null, int $count = 0) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sscan', array('key' => $key, 'iterator' => $iterator, 'pattern' => $pattern, 'count' => $count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sscan($key, $iterator, $pattern, $count);
    }

    public function strlen(string $key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'strlen', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->strlen($key);
    }

    public function subscribe(string $channel, string ... $other_channels) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'subscribe', array('channel' => $channel, 'other_channels' => $other_channels), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->subscribe($channel, ...$other_channels);
    }

    public function swapdb(string $src, string $dst) : bool
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'swapdb', array('src' => $src, 'dst' => $dst), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->swapdb($src, $dst);
    }

    public function time() : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'time', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->time();
    }

    public function ttl(string $key) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'ttl', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->ttl($key);
    }

    public function type(string $key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'type', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->type($key);
    }

    public function unlink(string|array $key, string ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'unlink', array('key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->unlink($key, ...$other_keys);
    }

    public function unsubscribe(string $channel, string ... $other_channels) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'unsubscribe', array('channel' => $channel, 'other_channels' => $other_channels), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->unsubscribe($channel, ...$other_channels);
    }

    public function unwatch()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'unwatch', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->unwatch();
    }

    public function watch(string|array $key, string ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'watch', array('key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->watch($key, ...$other_keys);
    }

    public function wait(int $count, int $timeout) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'wait', array('count' => $count, 'timeout' => $timeout), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->wait($count, $timeout);
    }

    public function xack(string $key, string $group, array $ids) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xack', array('key' => $key, 'group' => $group, 'ids' => $ids), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xack($key, $group, $ids);
    }

    public function xadd(string $key, string $id, array $values, int $maxlen = 0, bool $approx = false) : string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xadd', array('key' => $key, 'id' => $id, 'values' => $values, 'maxlen' => $maxlen, 'approx' => $approx), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xadd($key, $id, $values, $maxlen, $approx);
    }

    public function xclaim(string $key, string $group, string $consumer, int $min_iddle, array $ids, array $options) : string|array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xclaim', array('key' => $key, 'group' => $group, 'consumer' => $consumer, 'min_iddle' => $min_iddle, 'ids' => $ids, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xclaim($key, $group, $consumer, $min_iddle, $ids, $options);
    }

    public function xdel(string $key, array $ids) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xdel', array('key' => $key, 'ids' => $ids), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xdel($key, $ids);
    }

    public function xgroup(string $operation, ?string $key = null, ?string $arg1 = null, ?string $arg2 = null, bool $arg3 = false) : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xgroup', array('operation' => $operation, 'key' => $key, 'arg1' => $arg1, 'arg2' => $arg2, 'arg3' => $arg3), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xgroup($operation, $key, $arg1, $arg2, $arg3);
    }

    public function xinfo(string $operation, ?string $arg1 = null, ?string $arg2 = null) : mixed
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xinfo', array('operation' => $operation, 'arg1' => $arg1, 'arg2' => $arg2), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xinfo($operation, $arg1, $arg2);
    }

    public function xlen(string $key) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xlen', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xlen($key);
    }

    public function xpending(string $key, string $group, ?string $start = null, ?string $end = null, int $count = -1, ?string $consumer = null) : string
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xpending', array('key' => $key, 'group' => $group, 'start' => $start, 'end' => $end, 'count' => $count, 'consumer' => $consumer), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xpending($key, $group, $start, $end, $count, $consumer);
    }

    public function xrange(string $key, string $start, string $end, int $count = -1) : bool|array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xrange', array('key' => $key, 'start' => $start, 'end' => $end, 'count' => $count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xrange($key, $start, $end, $count);
    }

    public function xread(array $streams, int $count = -1, int $block = -1) : bool|array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xread', array('streams' => $streams, 'count' => $count, 'block' => $block), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xread($streams, $count, $block);
    }

    public function xreadgroup(string $group, string $consumer, array $streams, int $count = 1, int $block = 1) : bool|array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xreadgroup', array('group' => $group, 'consumer' => $consumer, 'streams' => $streams, 'count' => $count, 'block' => $block), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xreadgroup($group, $consumer, $streams, $count, $block);
    }

    public function xrevrange(string $key, string $start, string $end, int $count = -1) : bool|array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xrevrange', array('key' => $key, 'start' => $start, 'end' => $end, 'count' => $count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xrevrange($key, $start, $end, $count);
    }

    public function xtrim(string $key, int $maxlen, bool $approx = false) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xtrim', array('key' => $key, 'maxlen' => $maxlen, 'approx' => $approx), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xtrim($key, $maxlen, $approx);
    }

    public function zAdd(string $key, int $score, string $value) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zAdd', array('key' => $key, 'score' => $score, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zAdd($key, $score, $value);
    }

    public function zCard(string $key) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zCard', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zCard($key);
    }

    public function zCount(string $key, string $start, string $end) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zCount', array('key' => $key, 'start' => $start, 'end' => $end), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zCount($key, $start, $end);
    }

    public function zIncrBy(string $key, float $value, mixed $member) : float
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zIncrBy', array('key' => $key, 'value' => $value, 'member' => $member), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zIncrBy($key, $value, $member);
    }

    public function zLexCount(string $key, string $min, string $max) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zLexCount', array('key' => $key, 'min' => $min, 'max' => $max), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zLexCount($key, $min, $max);
    }

    public function zMscore(string $key, string $member, string ... $other_members) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zMscore', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zMscore($key, $member, ...$other_members);
    }

    public function zPopMax(string $key, ?int $value = null) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zPopMax', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zPopMax($key, $value);
    }

    public function zPopMin(string $key, ?int $value = null) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zPopMin', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zPopMin($key, $value);
    }

    public function zRange(string $key, int $start, int $end, mixed $scores = null) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRange', array('key' => $key, 'start' => $start, 'end' => $end, 'scores' => $scores), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRange($key, $start, $end, $scores);
    }

    public function zRangeByLex(string $key, string $min, string $max, int $offset = -1, int $count = -1) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRangeByLex', array('key' => $key, 'min' => $min, 'max' => $max, 'offset' => $offset, 'count' => $count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRangeByLex($key, $min, $max, $offset, $count);
    }

    public function zRangeByScore(string $key, string $start, string $end, array $options = []) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRangeByScore', array('key' => $key, 'start' => $start, 'end' => $end, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRangeByScore($key, $start, $end, $options);
    }

    public function zRandMember(string $key, ?array $options = null) : string|array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRandMember', array('key' => $key, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRandMember($key, $options);
    }

    public function zRank(string $key, string $member) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRank', array('key' => $key, 'member' => $member), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRank($key, $member);
    }

    public function zRem(string $key, string $member, string ... $other_members) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRem', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRem($key, $member, ...$other_members);
    }

    public function zRemRangeByLex(string $key, string $min, string $max) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRemRangeByLex', array('key' => $key, 'min' => $min, 'max' => $max), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRemRangeByLex($key, $min, $max);
    }

    public function zRemRangeByRank(string $key, int $start, int $end) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRemRangeByRank', array('key' => $key, 'start' => $start, 'end' => $end), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRemRangeByRank($key, $start, $end);
    }

    public function zRemRangeByScore(string $key, string $start, string $end) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRemRangeByScore', array('key' => $key, 'start' => $start, 'end' => $end), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRemRangeByScore($key, $start, $end);
    }

    public function zRevRange(string $key, int $start, int $end, mixed $scores = null) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRevRange', array('key' => $key, 'start' => $start, 'end' => $end, 'scores' => $scores), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRevRange($key, $start, $end, $scores);
    }

    public function zRevRangeByLex(string $key, string $min, string $max, int $offset = -1, int $count = -1) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRevRangeByLex', array('key' => $key, 'min' => $min, 'max' => $max, 'offset' => $offset, 'count' => $count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRevRangeByLex($key, $min, $max, $offset, $count);
    }

    public function zRevRangeByScore(string $key, string $start, string $end, array $options = []) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRevRangeByScore', array('key' => $key, 'start' => $start, 'end' => $end, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRevRangeByScore($key, $start, $end, $options);
    }

    public function zRevRank(string $key, string $member) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRevRank', array('key' => $key, 'member' => $member), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRevRank($key, $member);
    }

    public function zScore(string $key, mixed $member) : float
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zScore', array('key' => $key, 'member' => $member), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zScore($key, $member);
    }

    public function zdiff(array $keys, ?array $options = null) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zdiff', array('keys' => $keys, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zdiff($keys, $options);
    }

    public function zdiffstore(string $dst, array $keys, ?array $options = null) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zdiffstore', array('dst' => $dst, 'keys' => $keys, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zdiffstore($dst, $keys, $options);
    }

    public function zinter(array $keys, ?array $weights = null, ?array $options = null) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zinter', array('keys' => $keys, 'weights' => $weights, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zinter($keys, $weights, $options);
    }

    public function zinterstore(string $dst, array $keys, ?array $weights = null, ?string $aggregate = null) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zinterstore', array('dst' => $dst, 'keys' => $keys, 'weights' => $weights, 'aggregate' => $aggregate), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zinterstore($dst, $keys, $weights, $aggregate);
    }

    public function zscan(string $key, int &$iterator, ?string $pattern = null, int $count = 0) : bool|array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zscan', array('key' => $key, 'iterator' => $iterator, 'pattern' => $pattern, 'count' => $count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zscan($key, $iterator, $pattern, $count);
    }

    public function zunion(array $keys, ?array $weights = null, ?array $options = null) : array
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zunion', array('keys' => $keys, 'weights' => $weights, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zunion($keys, $weights, $options);
    }

    public function zunionstore(string $dst, array $keys, ?array $weights = null, ?string $aggregate = null) : int
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zunionstore', array('dst' => $dst, 'keys' => $keys, 'weights' => $weights, 'aggregate' => $aggregate), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zunionstore($dst, $keys, $weights, $aggregate);
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

        $instance->initializer342a0 = $initializer;

        return $instance;
    }

    public function __construct(?array $options = null)
    {
        static $reflection;

        if (! $this->valueHolder12061) {
            $reflection = $reflection ?? new \ReflectionClass('RedisStub');
            $this->valueHolder12061 = $reflection->newInstanceWithoutConstructor();
        }

        $this->valueHolder12061->__construct($options);
    }

    public function & __get($name)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '__get', ['name' => $name], $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        if (isset(self::$publicProperties26a59[$name])) {
            return $this->valueHolder12061->$name;
        }

        $realInstanceReflection = new \ReflectionClass('RedisStub');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12061;

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

        $targetObject = $this->valueHolder12061;
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
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        $realInstanceReflection = new \ReflectionClass('RedisStub');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12061;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder12061;
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
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '__isset', array('name' => $name), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        $realInstanceReflection = new \ReflectionClass('RedisStub');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12061;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder12061;
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
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '__unset', array('name' => $name), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        $realInstanceReflection = new \ReflectionClass('RedisStub');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12061;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder12061;
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
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '__clone', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        $this->valueHolder12061 = clone $this->valueHolder12061;
    }

    public function __sleep()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '__sleep', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return array('valueHolder12061');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer342a0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer342a0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'initializeProxy', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder12061;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder12061;
    }
}
