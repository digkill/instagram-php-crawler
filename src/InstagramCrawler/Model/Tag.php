<?php

namespace InstagramCrawler\Model;

/**
 * Class Tag
 * @package InstagramScraper\Model
 */
class Tag extends AbstractModel
{
    /**
     * @var array
     */
    protected static array $initPropertiesMap = [
        'media_count' => 'mediaCount',
        'name' => 'name',
        'id' => 'initInt',
    ];
    /**
     * @var int
     */
    protected $mediaCount = 0;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $id;

    /**
     * @return int
     */
    public function getMediaCount()
    {
        return $this->mediaCount;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}