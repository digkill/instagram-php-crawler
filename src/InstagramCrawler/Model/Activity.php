<?php


namespace InstagramCrawler\Model;


class Activity extends AbstractModel
{
    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var int
     */
    public $count;

    /**
     * @var ActivityElement[]
     */
    public $activityElements = [];

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @return ActivityElement[]
     */
    public function getActivityElements(): array
    {
        return $this->activityElements;
    }

    /**
     * @param ActivityElement $activityElement
     */
    public function addActivityElement(ActivityElement $activityElement): void
    {
        $this->activityElements[] = $activityElement;
    }

    /**
     * @param $value
     * @param $prop
     * @param $props
     */
    protected function initPropertiesCustom($value, $prop, $props): void
    {
        switch ($prop) {
            case 'timestamp':
                $this->timestamp = $value;
                break;
            case 'edge_web_activity_feed':
                $this->count = $value['count'];
                if ($this->count) {
                    foreach ($value['edges'] as $edge) {
                        $this->addActivityElement(ActivityElement::create($edge['node']));
                    }
                }
                break;
        }
    }

}