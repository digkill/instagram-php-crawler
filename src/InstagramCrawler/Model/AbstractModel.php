<?php

namespace InstagramCrawler\Model;

use InstagramCrawler\Traits\ArrayLikeTrait;
use InstagramCrawler\Traits\InitializerTrait;

/**
 * Class AbstractModel
 * @package InstagramScraper\Model
 */
abstract class AbstractModel implements \ArrayAccess
{
    use InitializerTrait, ArrayLikeTrait;

    /**
     * @var array
     */
    protected static array $initPropertiesMap = [];

    /**
     * @return array
     */
    public static function getColumns(): array
    {
        return \array_keys(static::$initPropertiesMap);
    }
}