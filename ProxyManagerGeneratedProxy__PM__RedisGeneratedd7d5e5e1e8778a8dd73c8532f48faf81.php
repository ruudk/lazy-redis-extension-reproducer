<?php

namespace ProxyManagerGeneratedProxy\__PM__\Redis;

class Generatedd7d5e5e1e8778a8dd73c8532f48faf81 extends \Redis implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Redis|null wrapped object, if the proxy is initialized
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

    private static $signatured7d5e5e1e8778a8dd73c8532f48faf81 = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czo1OiJSZWRpcyI7czo3OiJmYWN0b3J5IjtzOjUwOiJQcm94eU1hbmFnZXJcRmFjdG9yeVxMYXp5TG9hZGluZ1ZhbHVlSG9sZGVyRmFjdG9yeSI7czoxOToicHJveHlNYW5hZ2VyVmVyc2lvbiI7czo0NzoidjEuMC41QDAwNmFhNWQzMmY4ODdhNGRiNDM1M2IxM2I1YjUwOTU2MTNlMDYxMWYiO3M6MTI6InByb3h5T3B0aW9ucyI7YTowOnt9fQ==';

    public function __destruct()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '__destruct', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->__destruct();
    }

    public function _prefix($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '_prefix', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->_prefix($key);
    }

    public function _serialize($value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '_serialize', array('value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->_serialize($value);
    }

    public function _unserialize($value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '_unserialize', array('value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->_unserialize($value);
    }

    public function _pack($value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '_pack', array('value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->_pack($value);
    }

    public function _unpack($value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '_unpack', array('value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->_unpack($value);
    }

    public function _compress($value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '_compress', array('value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->_compress($value);
    }

    public function _uncompress($value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '_uncompress', array('value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->_uncompress($value);
    }

    public function acl($subcmd, ... $args)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'acl', array('subcmd' => $subcmd, 'args' => $args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->acl($subcmd, ...$args);
    }

    public function append($key, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'append', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->append($key, $value);
    }

    public function auth($auth)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'auth', array('auth' => $auth), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->auth($auth);
    }

    public function bgSave()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'bgSave', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->bgSave();
    }

    public function bgrewriteaof()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'bgrewriteaof', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->bgrewriteaof();
    }

    public function bitcount($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'bitcount', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->bitcount($key);
    }

    public function bitop($operation, $ret_key, $key, ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'bitop', array('operation' => $operation, 'ret_key' => $ret_key, 'key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->bitop($operation, $ret_key, $key, ...$other_keys);
    }

    public function bitpos($key, $bit, $start = null, $end = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'bitpos', array('key' => $key, 'bit' => $bit, 'start' => $start, 'end' => $end), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->bitpos($key, $bit, $start, $end);
    }

    public function blPop($key, $timeout_or_key, ... $extra_args)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'blPop', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->blPop($key, $timeout_or_key, ...$extra_args);
    }

    public function brPop($key, $timeout_or_key, ... $extra_args)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'brPop', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->brPop($key, $timeout_or_key, ...$extra_args);
    }

    public function brpoplpush($src, $dst, $timeout)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'brpoplpush', array('src' => $src, 'dst' => $dst, 'timeout' => $timeout), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->brpoplpush($src, $dst, $timeout);
    }

    public function bzPopMax($key, $timeout_or_key, ... $extra_args)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'bzPopMax', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->bzPopMax($key, $timeout_or_key, ...$extra_args);
    }

    public function bzPopMin($key, $timeout_or_key, ... $extra_args)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'bzPopMin', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->bzPopMin($key, $timeout_or_key, ...$extra_args);
    }

    public function clearLastError()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'clearLastError', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->clearLastError();
    }

    public function client($cmd, ... $args)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'client', array('cmd' => $cmd, 'args' => $args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->client($cmd, ...$args);
    }

    public function close()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'close', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->close();
    }

    public function command(... $args)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'command', array('args' => $args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->command(...$args);
    }

    public function config($cmd, $key, $value = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'config', array('cmd' => $cmd, 'key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->config($cmd, $key, $value);
    }

    public function connect($host, $port = null, $timeout = null, $retry_interval = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'connect', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'retry_interval' => $retry_interval), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->connect($host, $port, $timeout, $retry_interval);
    }

    public function dbSize()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'dbSize', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->dbSize();
    }

    public function debug($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'debug', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->debug($key);
    }

    public function decr($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'decr', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->decr($key);
    }

    public function decrBy($key, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'decrBy', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->decrBy($key, $value);
    }

    public function del($key, ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'del', array('key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->del($key, ...$other_keys);
    }

    public function discard()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'discard', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->discard();
    }

    public function dump($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'dump', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->dump($key);
    }

    public function echo($msg)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'echo', array('msg' => $msg), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->echo($msg);
    }

    public function eval($script, $args = null, $num_keys = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'eval', array('script' => $script, 'args' => $args, 'num_keys' => $num_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->eval($script, $args, $num_keys);
    }

    public function evalsha($script_sha, $args = null, $num_keys = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'evalsha', array('script_sha' => $script_sha, 'args' => $args, 'num_keys' => $num_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->evalsha($script_sha, $args, $num_keys);
    }

    public function exec()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'exec', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->exec();
    }

    public function exists($key, ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'exists', array('key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->exists($key, ...$other_keys);
    }

    public function expire($key, $timeout)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'expire', array('key' => $key, 'timeout' => $timeout), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->expire($key, $timeout);
    }

    public function expireAt($key, $timestamp)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'expireAt', array('key' => $key, 'timestamp' => $timestamp), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->expireAt($key, $timestamp);
    }

    public function flushAll($async = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'flushAll', array('async' => $async), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->flushAll($async);
    }

    public function flushDB($async = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'flushDB', array('async' => $async), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->flushDB($async);
    }

    public function geoadd($key, $lng, $lat, $member, ... $other_triples)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'geoadd', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'member' => $member, 'other_triples' => $other_triples), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->geoadd($key, $lng, $lat, $member, ...$other_triples);
    }

    public function geodist($key, $src, $dst, $unit = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'geodist', array('key' => $key, 'src' => $src, 'dst' => $dst, 'unit' => $unit), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->geodist($key, $src, $dst, $unit);
    }

    public function geohash($key, $member, ... $other_members)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'geohash', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->geohash($key, $member, ...$other_members);
    }

    public function geopos($key, $member, ... $other_members)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'geopos', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->geopos($key, $member, ...$other_members);
    }

    public function georadius($key, $lng, $lan, $radius, $unit, array $opts = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'georadius', array('key' => $key, 'lng' => $lng, 'lan' => $lan, 'radius' => $radius, 'unit' => $unit, 'opts' => $opts), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->georadius($key, $lng, $lan, $radius, $unit, $opts);
    }

    public function georadius_ro($key, $lng, $lan, $radius, $unit, array $opts = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'georadius_ro', array('key' => $key, 'lng' => $lng, 'lan' => $lan, 'radius' => $radius, 'unit' => $unit, 'opts' => $opts), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->georadius_ro($key, $lng, $lan, $radius, $unit, $opts);
    }

    public function georadiusbymember($key, $member, $radius, $unit, array $opts = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'georadiusbymember', array('key' => $key, 'member' => $member, 'radius' => $radius, 'unit' => $unit, 'opts' => $opts), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->georadiusbymember($key, $member, $radius, $unit, $opts);
    }

    public function georadiusbymember_ro($key, $member, $radius, $unit, array $opts = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'georadiusbymember_ro', array('key' => $key, 'member' => $member, 'radius' => $radius, 'unit' => $unit, 'opts' => $opts), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->georadiusbymember_ro($key, $member, $radius, $unit, $opts);
    }

    public function get($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'get', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->get($key);
    }

    public function getAuth()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getAuth', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getAuth();
    }

    public function getBit($key, $offset)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getBit', array('key' => $key, 'offset' => $offset), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getBit($key, $offset);
    }

    public function getDBNum()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getDBNum', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getDBNum();
    }

    public function getHost()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getHost', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getHost();
    }

    public function getLastError()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getLastError', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getLastError();
    }

    public function getMode()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getMode', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getMode();
    }

    public function getOption($option)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getOption', array('option' => $option), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getOption($option);
    }

    public function getPersistentID()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getPersistentID', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getPersistentID();
    }

    public function getPort()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getPort', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getPort();
    }

    public function getRange($key, $start, $end)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getRange', array('key' => $key, 'start' => $start, 'end' => $end), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getRange($key, $start, $end);
    }

    public function getReadTimeout()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getReadTimeout', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getReadTimeout();
    }

    public function getSet($key, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getSet', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getSet($key, $value);
    }

    public function getTimeout()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getTimeout', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getTimeout();
    }

    public function hDel($key, $member, ... $other_members)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hDel', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hDel($key, $member, ...$other_members);
    }

    public function hExists($key, $member)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hExists', array('key' => $key, 'member' => $member), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hExists($key, $member);
    }

    public function hGet($key, $member)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hGet', array('key' => $key, 'member' => $member), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hGet($key, $member);
    }

    public function hGetAll($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hGetAll', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hGetAll($key);
    }

    public function hIncrBy($key, $member, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hIncrBy', array('key' => $key, 'member' => $member, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hIncrBy($key, $member, $value);
    }

    public function hIncrByFloat($key, $member, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hIncrByFloat', array('key' => $key, 'member' => $member, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hIncrByFloat($key, $member, $value);
    }

    public function hKeys($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hKeys', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hKeys($key);
    }

    public function hLen($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hLen', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hLen($key);
    }

    public function hMget($key, array $keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hMget', array('key' => $key, 'keys' => $keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hMget($key, $keys);
    }

    public function hMset($key, array $pairs)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hMset', array('key' => $key, 'pairs' => $pairs), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hMset($key, $pairs);
    }

    public function hSet($key, $member, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hSet', array('key' => $key, 'member' => $member, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hSet($key, $member, $value);
    }

    public function hSetNx($key, $member, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hSetNx', array('key' => $key, 'member' => $member, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hSetNx($key, $member, $value);
    }

    public function hStrLen($key, $member)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hStrLen', array('key' => $key, 'member' => $member), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hStrLen($key, $member);
    }

    public function hVals($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hVals', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hVals($key);
    }

    public function hscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'hscan', array('str_key' => $str_key, 'i_iterator' => $i_iterator, 'str_pattern' => $str_pattern, 'i_count' => $i_count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->hscan($str_key, $i_iterator, $str_pattern, $i_count);
    }

    public function incr($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'incr', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->incr($key);
    }

    public function incrBy($key, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'incrBy', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->incrBy($key, $value);
    }

    public function incrByFloat($key, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'incrByFloat', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->incrByFloat($key, $value);
    }

    public function info($option = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'info', array('option' => $option), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->info($option);
    }

    public function isConnected()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'isConnected', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->isConnected();
    }

    public function keys($pattern)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'keys', array('pattern' => $pattern), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->keys($pattern);
    }

    public function lInsert($key, $position, $pivot, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lInsert', array('key' => $key, 'position' => $position, 'pivot' => $pivot, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lInsert($key, $position, $pivot, $value);
    }

    public function lLen($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lLen', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lLen($key);
    }

    public function lPop($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lPop', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lPop($key);
    }

    public function lPush($key, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lPush', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lPush($key, $value);
    }

    public function lPushx($key, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lPushx', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lPushx($key, $value);
    }

    public function lSet($key, $index, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lSet', array('key' => $key, 'index' => $index, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lSet($key, $index, $value);
    }

    public function lastSave()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lastSave', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lastSave();
    }

    public function lindex($key, $index)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lindex', array('key' => $key, 'index' => $index), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lindex($key, $index);
    }

    public function lrange($key, $start, $end)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lrange', array('key' => $key, 'start' => $start, 'end' => $end), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lrange($key, $start, $end);
    }

    public function lrem($key, $value, $count)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lrem', array('key' => $key, 'value' => $value, 'count' => $count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lrem($key, $value, $count);
    }

    public function ltrim($key, $start, $stop)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'ltrim', array('key' => $key, 'start' => $start, 'stop' => $stop), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->ltrim($key, $start, $stop);
    }

    public function mget(array $keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'mget', array('keys' => $keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->mget($keys);
    }

    public function migrate($host, $port, $key, $db, $timeout, $copy = null, $replace = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'migrate', array('host' => $host, 'port' => $port, 'key' => $key, 'db' => $db, 'timeout' => $timeout, 'copy' => $copy, 'replace' => $replace), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->migrate($host, $port, $key, $db, $timeout, $copy, $replace);
    }

    public function move($key, $dbindex)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'move', array('key' => $key, 'dbindex' => $dbindex), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->move($key, $dbindex);
    }

    public function mset(array $pairs)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'mset', array('pairs' => $pairs), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->mset($pairs);
    }

    public function msetnx(array $pairs)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'msetnx', array('pairs' => $pairs), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->msetnx($pairs);
    }

    public function multi($mode = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'multi', array('mode' => $mode), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->multi($mode);
    }

    public function object($field, $key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'object', array('field' => $field, 'key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->object($field, $key);
    }

    public function pconnect($host, $port = null, $timeout = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pconnect', array('host' => $host, 'port' => $port, 'timeout' => $timeout), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pconnect($host, $port, $timeout);
    }

    public function persist($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'persist', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->persist($key);
    }

    public function pexpire($key, $timestamp)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pexpire', array('key' => $key, 'timestamp' => $timestamp), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pexpire($key, $timestamp);
    }

    public function pexpireAt($key, $timestamp)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pexpireAt', array('key' => $key, 'timestamp' => $timestamp), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pexpireAt($key, $timestamp);
    }

    public function pfadd($key, array $elements)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pfadd', array('key' => $key, 'elements' => $elements), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pfadd($key, $elements);
    }

    public function pfcount($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pfcount', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pfcount($key);
    }

    public function pfmerge($dstkey, array $keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pfmerge', array('dstkey' => $dstkey, 'keys' => $keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pfmerge($dstkey, $keys);
    }

    public function ping()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'ping', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->ping();
    }

    public function pipeline()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pipeline', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pipeline();
    }

    public function psetex($key, $expire, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'psetex', array('key' => $key, 'expire' => $expire, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->psetex($key, $expire, $value);
    }

    public function psubscribe(array $patterns, $callback)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'psubscribe', array('patterns' => $patterns, 'callback' => $callback), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->psubscribe($patterns, $callback);
    }

    public function pttl($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pttl', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pttl($key);
    }

    public function publish($channel, $message)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'publish', array('channel' => $channel, 'message' => $message), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->publish($channel, $message);
    }

    public function pubsub($cmd, ... $args)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'pubsub', array('cmd' => $cmd, 'args' => $args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->pubsub($cmd, ...$args);
    }

    public function punsubscribe($pattern, ... $other_patterns)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'punsubscribe', array('pattern' => $pattern, 'other_patterns' => $other_patterns), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->punsubscribe($pattern, ...$other_patterns);
    }

    public function rPop($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'rPop', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->rPop($key);
    }

    public function rPush($key, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'rPush', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->rPush($key, $value);
    }

    public function rPushx($key, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'rPushx', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->rPushx($key, $value);
    }

    public function randomKey()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'randomKey', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->randomKey();
    }

    public function rawcommand($cmd, ... $args)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'rawcommand', array('cmd' => $cmd, 'args' => $args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->rawcommand($cmd, ...$args);
    }

    public function rename($key, $newkey)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'rename', array('key' => $key, 'newkey' => $newkey), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->rename($key, $newkey);
    }

    public function renameNx($key, $newkey)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'renameNx', array('key' => $key, 'newkey' => $newkey), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->renameNx($key, $newkey);
    }

    public function restore($ttl, $key, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'restore', array('ttl' => $ttl, 'key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->restore($ttl, $key, $value);
    }

    public function role()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'role', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->role();
    }

    public function rpoplpush($src, $dst)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'rpoplpush', array('src' => $src, 'dst' => $dst), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->rpoplpush($src, $dst);
    }

    public function sAdd($key, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sAdd', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sAdd($key, $value);
    }

    public function sAddArray($key, array $options)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sAddArray', array('key' => $key, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sAddArray($key, $options);
    }

    public function sDiff($key, ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sDiff', array('key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sDiff($key, ...$other_keys);
    }

    public function sDiffStore($dst, $key, ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sDiffStore', array('dst' => $dst, 'key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sDiffStore($dst, $key, ...$other_keys);
    }

    public function sInter($key, ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sInter', array('key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sInter($key, ...$other_keys);
    }

    public function sInterStore($dst, $key, ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sInterStore', array('dst' => $dst, 'key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sInterStore($dst, $key, ...$other_keys);
    }

    public function sMembers($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sMembers', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sMembers($key);
    }

    public function sMisMember($key, $member, ... $other_members)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sMisMember', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sMisMember($key, $member, ...$other_members);
    }

    public function sMove($src, $dst, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sMove', array('src' => $src, 'dst' => $dst, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sMove($src, $dst, $value);
    }

    public function sPop($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sPop', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sPop($key);
    }

    public function sRandMember($key, $count = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sRandMember', array('key' => $key, 'count' => $count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sRandMember($key, $count);
    }

    public function sUnion($key, ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sUnion', array('key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sUnion($key, ...$other_keys);
    }

    public function sUnionStore($dst, $key, ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sUnionStore', array('dst' => $dst, 'key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sUnionStore($dst, $key, ...$other_keys);
    }

    public function save()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'save', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->save();
    }

    public function scan(&$i_iterator, $str_pattern = null, $i_count = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'scan', array('i_iterator' => $i_iterator, 'str_pattern' => $str_pattern, 'i_count' => $i_count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->scan($i_iterator, $str_pattern, $i_count);
    }

    public function scard($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'scard', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->scard($key);
    }

    public function script($cmd, ... $args)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'script', array('cmd' => $cmd, 'args' => $args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->script($cmd, ...$args);
    }

    public function select($dbindex)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'select', array('dbindex' => $dbindex), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->select($dbindex);
    }

    public function set($key, $value, $opts = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'set', array('key' => $key, 'value' => $value, 'opts' => $opts), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->set($key, $value, $opts);
    }

    public function setBit($key, $offset, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'setBit', array('key' => $key, 'offset' => $offset, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->setBit($key, $offset, $value);
    }

    public function setOption($option, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'setOption', array('option' => $option, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->setOption($option, $value);
    }

    public function setRange($key, $offset, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'setRange', array('key' => $key, 'offset' => $offset, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->setRange($key, $offset, $value);
    }

    public function setex($key, $expire, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'setex', array('key' => $key, 'expire' => $expire, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->setex($key, $expire, $value);
    }

    public function setnx($key, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'setnx', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->setnx($key, $value);
    }

    public function sismember($key, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sismember', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sismember($key, $value);
    }

    public function slaveof($host = null, $port = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'slaveof', array('host' => $host, 'port' => $port), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->slaveof($host, $port);
    }

    public function slowlog($arg, $option = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'slowlog', array('arg' => $arg, 'option' => $option), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->slowlog($arg, $option);
    }

    public function sort($key, array $options = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sort', array('key' => $key, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sort($key, $options);
    }

    public function sortAsc($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sortAsc', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'start' => $start, 'end' => $end, 'getList' => $getList), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sortAsc($key, $pattern, $get, $start, $end, $getList);
    }

    public function sortAscAlpha($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sortAscAlpha', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'start' => $start, 'end' => $end, 'getList' => $getList), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sortAscAlpha($key, $pattern, $get, $start, $end, $getList);
    }

    public function sortDesc($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sortDesc', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'start' => $start, 'end' => $end, 'getList' => $getList), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sortDesc($key, $pattern, $get, $start, $end, $getList);
    }

    public function sortDescAlpha($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sortDescAlpha', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'start' => $start, 'end' => $end, 'getList' => $getList), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sortDescAlpha($key, $pattern, $get, $start, $end, $getList);
    }

    public function srem($key, $member, ... $other_members)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'srem', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->srem($key, $member, ...$other_members);
    }

    public function sscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sscan', array('str_key' => $str_key, 'i_iterator' => $i_iterator, 'str_pattern' => $str_pattern, 'i_count' => $i_count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sscan($str_key, $i_iterator, $str_pattern, $i_count);
    }

    public function strlen($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'strlen', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->strlen($key);
    }

    public function subscribe(array $channels, $callback)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'subscribe', array('channels' => $channels, 'callback' => $callback), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->subscribe($channels, $callback);
    }

    public function swapdb($srcdb, $dstdb)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'swapdb', array('srcdb' => $srcdb, 'dstdb' => $dstdb), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->swapdb($srcdb, $dstdb);
    }

    public function time()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'time', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->time();
    }

    public function ttl($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'ttl', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->ttl($key);
    }

    public function type($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'type', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->type($key);
    }

    public function unlink($key, ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'unlink', array('key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->unlink($key, ...$other_keys);
    }

    public function unsubscribe($channel, ... $other_channels)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'unsubscribe', array('channel' => $channel, 'other_channels' => $other_channels), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->unsubscribe($channel, ...$other_channels);
    }

    public function unwatch()
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'unwatch', array(), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->unwatch();
    }

    public function wait($numslaves, $timeout)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'wait', array('numslaves' => $numslaves, 'timeout' => $timeout), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->wait($numslaves, $timeout);
    }

    public function watch($key, ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'watch', array('key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->watch($key, ...$other_keys);
    }

    public function xack($str_key, $str_group, array $arr_ids)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xack', array('str_key' => $str_key, 'str_group' => $str_group, 'arr_ids' => $arr_ids), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xack($str_key, $str_group, $arr_ids);
    }

    public function xadd($str_key, $str_id, array $arr_fields, $i_maxlen = null, $boo_approximate = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xadd', array('str_key' => $str_key, 'str_id' => $str_id, 'arr_fields' => $arr_fields, 'i_maxlen' => $i_maxlen, 'boo_approximate' => $boo_approximate), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xadd($str_key, $str_id, $arr_fields, $i_maxlen, $boo_approximate);
    }

    public function xclaim($str_key, $str_group, $str_consumer, $i_min_idle, array $arr_ids, array $arr_opts = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xclaim', array('str_key' => $str_key, 'str_group' => $str_group, 'str_consumer' => $str_consumer, 'i_min_idle' => $i_min_idle, 'arr_ids' => $arr_ids, 'arr_opts' => $arr_opts), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xclaim($str_key, $str_group, $str_consumer, $i_min_idle, $arr_ids, $arr_opts);
    }

    public function xdel($str_key, array $arr_ids)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xdel', array('str_key' => $str_key, 'arr_ids' => $arr_ids), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xdel($str_key, $arr_ids);
    }

    public function xgroup($str_operation, $str_key = null, $str_arg1 = null, $str_arg2 = null, $str_arg3 = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xgroup', array('str_operation' => $str_operation, 'str_key' => $str_key, 'str_arg1' => $str_arg1, 'str_arg2' => $str_arg2, 'str_arg3' => $str_arg3), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xgroup($str_operation, $str_key, $str_arg1, $str_arg2, $str_arg3);
    }

    public function xinfo($str_cmd, $str_key = null, $str_group = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xinfo', array('str_cmd' => $str_cmd, 'str_key' => $str_key, 'str_group' => $str_group), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xinfo($str_cmd, $str_key, $str_group);
    }

    public function xlen($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xlen', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xlen($key);
    }

    public function xpending($str_key, $str_group, $str_start = null, $str_end = null, $i_count = null, $str_consumer = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xpending', array('str_key' => $str_key, 'str_group' => $str_group, 'str_start' => $str_start, 'str_end' => $str_end, 'i_count' => $i_count, 'str_consumer' => $str_consumer), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xpending($str_key, $str_group, $str_start, $str_end, $i_count, $str_consumer);
    }

    public function xrange($str_key, $str_start, $str_end, $i_count = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xrange', array('str_key' => $str_key, 'str_start' => $str_start, 'str_end' => $str_end, 'i_count' => $i_count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xrange($str_key, $str_start, $str_end, $i_count);
    }

    public function xread(array $arr_streams, $i_count = null, $i_block = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xread', array('arr_streams' => $arr_streams, 'i_count' => $i_count, 'i_block' => $i_block), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xread($arr_streams, $i_count, $i_block);
    }

    public function xreadgroup($str_group, $str_consumer, array $arr_streams, $i_count = null, $i_block = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xreadgroup', array('str_group' => $str_group, 'str_consumer' => $str_consumer, 'arr_streams' => $arr_streams, 'i_count' => $i_count, 'i_block' => $i_block), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xreadgroup($str_group, $str_consumer, $arr_streams, $i_count, $i_block);
    }

    public function xrevrange($str_key, $str_start, $str_end, $i_count = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xrevrange', array('str_key' => $str_key, 'str_start' => $str_start, 'str_end' => $str_end, 'i_count' => $i_count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xrevrange($str_key, $str_start, $str_end, $i_count);
    }

    public function xtrim($str_key, $i_maxlen, $boo_approximate = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'xtrim', array('str_key' => $str_key, 'i_maxlen' => $i_maxlen, 'boo_approximate' => $boo_approximate), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->xtrim($str_key, $i_maxlen, $boo_approximate);
    }

    public function zAdd($key, $score, $value, ... $extra_args)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zAdd', array('key' => $key, 'score' => $score, 'value' => $value, 'extra_args' => $extra_args), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zAdd($key, $score, $value, ...$extra_args);
    }

    public function zCard($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zCard', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zCard($key);
    }

    public function zCount($key, $min, $max)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zCount', array('key' => $key, 'min' => $min, 'max' => $max), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zCount($key, $min, $max);
    }

    public function zIncrBy($key, $value, $member)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zIncrBy', array('key' => $key, 'value' => $value, 'member' => $member), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zIncrBy($key, $value, $member);
    }

    public function zLexCount($key, $min, $max)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zLexCount', array('key' => $key, 'min' => $min, 'max' => $max), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zLexCount($key, $min, $max);
    }

    public function zPopMax($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zPopMax', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zPopMax($key);
    }

    public function zPopMin($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zPopMin', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zPopMin($key);
    }

    public function zRange($key, $start, $end, $scores = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRange', array('key' => $key, 'start' => $start, 'end' => $end, 'scores' => $scores), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRange($key, $start, $end, $scores);
    }

    public function zRangeByLex($key, $min, $max, $offset = null, $limit = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRangeByLex', array('key' => $key, 'min' => $min, 'max' => $max, 'offset' => $offset, 'limit' => $limit), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRangeByLex($key, $min, $max, $offset, $limit);
    }

    public function zRangeByScore($key, $start, $end, array $options = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRangeByScore', array('key' => $key, 'start' => $start, 'end' => $end, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRangeByScore($key, $start, $end, $options);
    }

    public function zRank($key, $member)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRank', array('key' => $key, 'member' => $member), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRank($key, $member);
    }

    public function zRem($key, $member, ... $other_members)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRem', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRem($key, $member, ...$other_members);
    }

    public function zRemRangeByLex($key, $min, $max)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRemRangeByLex', array('key' => $key, 'min' => $min, 'max' => $max), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRemRangeByLex($key, $min, $max);
    }

    public function zRemRangeByRank($key, $start, $end)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRemRangeByRank', array('key' => $key, 'start' => $start, 'end' => $end), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRemRangeByRank($key, $start, $end);
    }

    public function zRemRangeByScore($key, $min, $max)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRemRangeByScore', array('key' => $key, 'min' => $min, 'max' => $max), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRemRangeByScore($key, $min, $max);
    }

    public function zRevRange($key, $start, $end, $scores = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRevRange', array('key' => $key, 'start' => $start, 'end' => $end, 'scores' => $scores), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRevRange($key, $start, $end, $scores);
    }

    public function zRevRangeByLex($key, $min, $max, $offset = null, $limit = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRevRangeByLex', array('key' => $key, 'min' => $min, 'max' => $max, 'offset' => $offset, 'limit' => $limit), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRevRangeByLex($key, $min, $max, $offset, $limit);
    }

    public function zRevRangeByScore($key, $start, $end, array $options = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRevRangeByScore', array('key' => $key, 'start' => $start, 'end' => $end, 'options' => $options), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRevRangeByScore($key, $start, $end, $options);
    }

    public function zRevRank($key, $member)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRevRank', array('key' => $key, 'member' => $member), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRevRank($key, $member);
    }

    public function zScore($key, $member)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zScore', array('key' => $key, 'member' => $member), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zScore($key, $member);
    }

    public function zinterstore($key, array $keys, ?array $weights = null, $aggregate = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zinterstore', array('key' => $key, 'keys' => $keys, 'weights' => $weights, 'aggregate' => $aggregate), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zinterstore($key, $keys, $weights, $aggregate);
    }

    public function zscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zscan', array('str_key' => $str_key, 'i_iterator' => $i_iterator, 'str_pattern' => $str_pattern, 'i_count' => $i_count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zscan($str_key, $i_iterator, $str_pattern, $i_count);
    }

    public function zunionstore($key, array $keys, ?array $weights = null, $aggregate = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zunionstore', array('key' => $key, 'keys' => $keys, 'weights' => $weights, 'aggregate' => $aggregate), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zunionstore($key, $keys, $weights, $aggregate);
    }

    public function delete($key, ... $other_keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'delete', array('key' => $key, 'other_keys' => $other_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->delete($key, ...$other_keys);
    }

    public function evaluate($script, $args = null, $num_keys = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'evaluate', array('script' => $script, 'args' => $args, 'num_keys' => $num_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->evaluate($script, $args, $num_keys);
    }

    public function evaluateSha($script_sha, $args = null, $num_keys = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'evaluateSha', array('script_sha' => $script_sha, 'args' => $args, 'num_keys' => $num_keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->evaluateSha($script_sha, $args, $num_keys);
    }

    public function getKeys($pattern)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getKeys', array('pattern' => $pattern), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getKeys($pattern);
    }

    public function getMultiple(array $keys)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'getMultiple', array('keys' => $keys), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->getMultiple($keys);
    }

    public function lGet($key, $index)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lGet', array('key' => $key, 'index' => $index), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lGet($key, $index);
    }

    public function lGetRange($key, $start, $end)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lGetRange', array('key' => $key, 'start' => $start, 'end' => $end), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lGetRange($key, $start, $end);
    }

    public function lRemove($key, $value, $count)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lRemove', array('key' => $key, 'value' => $value, 'count' => $count), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lRemove($key, $value, $count);
    }

    public function lSize($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'lSize', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->lSize($key);
    }

    public function listTrim($key, $start, $stop)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'listTrim', array('key' => $key, 'start' => $start, 'stop' => $stop), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->listTrim($key, $start, $stop);
    }

    public function open($host, $port = null, $timeout = null, $retry_interval = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'open', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'retry_interval' => $retry_interval), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->open($host, $port, $timeout, $retry_interval);
    }

    public function popen($host, $port = null, $timeout = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'popen', array('host' => $host, 'port' => $port, 'timeout' => $timeout), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->popen($host, $port, $timeout);
    }

    public function renameKey($key, $newkey)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'renameKey', array('key' => $key, 'newkey' => $newkey), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->renameKey($key, $newkey);
    }

    public function sContains($key, $value)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sContains', array('key' => $key, 'value' => $value), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sContains($key, $value);
    }

    public function sGetMembers($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sGetMembers', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sGetMembers($key);
    }

    public function sRemove($key, $member, ... $other_members)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sRemove', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sRemove($key, $member, ...$other_members);
    }

    public function sSize($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sSize', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sSize($key);
    }

    public function sendEcho($msg)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'sendEcho', array('msg' => $msg), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->sendEcho($msg);
    }

    public function setTimeout($key, $timeout)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'setTimeout', array('key' => $key, 'timeout' => $timeout), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->setTimeout($key, $timeout);
    }

    public function substr($key, $start, $end)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'substr', array('key' => $key, 'start' => $start, 'end' => $end), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->substr($key, $start, $end);
    }

    public function zDelete($key, $member, ... $other_members)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zDelete', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zDelete($key, $member, ...$other_members);
    }

    public function zDeleteRangeByRank($key, $min, $max)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zDeleteRangeByRank', array('key' => $key, 'min' => $min, 'max' => $max), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zDeleteRangeByRank($key, $min, $max);
    }

    public function zDeleteRangeByScore($key, $min, $max)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zDeleteRangeByScore', array('key' => $key, 'min' => $min, 'max' => $max), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zDeleteRangeByScore($key, $min, $max);
    }

    public function zInter($key, array $keys, ?array $weights = null, $aggregate = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zInter', array('key' => $key, 'keys' => $keys, 'weights' => $weights, 'aggregate' => $aggregate), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zInter($key, $keys, $weights, $aggregate);
    }

    public function zRemove($key, $member, ... $other_members)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRemove', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRemove($key, $member, ...$other_members);
    }

    public function zRemoveRangeByScore($key, $min, $max)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zRemoveRangeByScore', array('key' => $key, 'min' => $min, 'max' => $max), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zRemoveRangeByScore($key, $min, $max);
    }

    public function zReverseRange($key, $start, $end, $scores = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zReverseRange', array('key' => $key, 'start' => $start, 'end' => $end, 'scores' => $scores), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zReverseRange($key, $start, $end, $scores);
    }

    public function zSize($key)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zSize', array('key' => $key), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zSize($key);
    }

    public function zUnion($key, array $keys, ?array $weights = null, $aggregate = null)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, 'zUnion', array('key' => $key, 'keys' => $keys, 'weights' => $weights, 'aggregate' => $aggregate), $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        return $this->valueHolder12061->zUnion($key, $keys, $weights, $aggregate);
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

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder12061) {
            $reflection = $reflection ?? new \ReflectionClass('Redis');
            $this->valueHolder12061 = $reflection->newInstanceWithoutConstructor();
        }

        $this->valueHolder12061->__construct();
    }

    public function & __get($name)
    {
        $this->initializer342a0 && ($this->initializer342a0->__invoke($valueHolder12061, $this, '__get', ['name' => $name], $this->initializer342a0) || 1) && $this->valueHolder12061 = $valueHolder12061;

        if (isset(self::$publicProperties26a59[$name])) {
            return $this->valueHolder12061->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Redis');

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

        $realInstanceReflection = new \ReflectionClass('Redis');

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

        $realInstanceReflection = new \ReflectionClass('Redis');

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

        $realInstanceReflection = new \ReflectionClass('Redis');

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
