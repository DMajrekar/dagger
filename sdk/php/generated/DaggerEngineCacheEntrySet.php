<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dagger;

/**
 * A set of cache entries returned by a query to a cache
 */
class DaggerEngineCacheEntrySet extends Client\AbstractObject implements Client\IdAble
{
    /**
     * The total disk space used by the cache entries in this set.
     */
    public function diskSpaceBytes(): int
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('diskSpaceBytes');
        return (int)$this->queryLeaf($leafQueryBuilder, 'diskSpaceBytes');
    }

    /**
     * The list of individual cache entries in the set
     */
    public function entries(): array
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('entries');
        return (array)$this->queryLeaf($leafQueryBuilder, 'entries');
    }

    /**
     * The number of cache entries in this set.
     */
    public function entryCount(): int
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('entryCount');
        return (int)$this->queryLeaf($leafQueryBuilder, 'entryCount');
    }

    /**
     * A unique identifier for this DaggerEngineCacheEntrySet.
     */
    public function id(): DaggerEngineCacheEntrySetId
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('id');
        return new \Dagger\DaggerEngineCacheEntrySetId((string)$this->queryLeaf($leafQueryBuilder, 'id'));
    }
}