<?php

namespace Lamesya\Freshdesk\Resources\Traits;

/**
 * All Trait
 *
 * @package Lamesya\Freshdesk\Resources\Traits
 */
trait AllTrait
{
    /**
     * @param null $end string
     * @return string
     */
    abstract protected function endpoint($end = null);

    /**
     * @return Lamesya\Freshdesk\Http\FreshdeskClient
     */
    abstract protected function api();

    /**
     * Get a list of all resources
     * 
     * @param null array $query
     * @return array|null
     */
    public function all(array $query = null)
    {
        return $this->api()->get($this->endpoint(), $query);
    }
}