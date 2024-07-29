<?php

namespace Lamesya\Freshdesk\Resources\Traits;

/**
 * Create Trait
 *
 * @package Lamesya\Freshdesk\Resources\Traits
 */
trait CreateTrait
{
    /**
     * @param null $end string
     * @return string
     */
    abstract protected function endpoint($end = null);

    /**
     * @return Lamesya\Freshdesk\Freshdesk
     */
    abstract protected function api();

    /**
     * Create a resource
     * 
     * @param array $data
     * @return array|null
     */
    public function create(array $data)
    {
        return $this->api()->post($this->endpoint(), $data);
    }
}