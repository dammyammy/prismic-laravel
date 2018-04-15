<?php

namespace TedbreeDigital\Prismic;

use Prismic\Cache\CacheInterface;

class Cache implements CacheInterface
{

    protected $cache = null;

    public function __construct()
    {
        $this->cache = \Cache::tags(['prismic-laravel']);
    }

    /*
     * Check if the cache has item with the key
     *
     * @param string $key the key of the cache entry
     * @return boolean true if the cache has a value for this key, otherwise false
     */
    public function has($key) {
        return $this->cache->has($key);
    }

    /**
     * Returns the value of a cache entry from its key
     *
     *
     * @param  string    $key the key of the cache entry
     * @return mixed the value of the entry, as it was passed to CacheInterface::set, null if not present in cache
     */
    public function get($key) {
        return $this->cache->get($key);
    }

    /**
     * Stores a new cache entry
     *
     * @param string    $key   the key of the cache entry
     * @param \stdClass $value the value of the entry
     * @param int       $ttl   the time (in seconds) until this cache entry expires
     * @return void
     */
    public function set($key, $value, $ttl = 0) {
        $this->cache->put($key, $value, $ttl / 60.0);
    }

    /**
     * Deletes a cache entry, from its key
     *
     * @param string $key the key of the cache entry
     * @return void
     */
    public function delete($key)
    {
        $this->cache->forget($key);
    }

    /**
     * Clears the whole cache
     *
     * @return void
     */
    public function clear()
    {
        $this->cache->flush();
    }
}