<?php

namespace Lamesya\Freshdesk\Resources\Traits;

/**
 * View Trait
 *
 * @package Lamesya\Freshdesk\Resources\Traits
 */
trait ViewTrait
{
    /**
     * @param integer $end string
     * @return string
     */
    abstract protected function endpoint($end = null);

    /**
     * @return Lamesya\Freshdesk\Freshdesk
     */
    abstract protected function api();

    /**
     * Update a resource
     * 
     * @param int $id
     * @param null array $query
     * @return array|null
     */
    public function view($id, array $query = null)
    {
        return $this->api()->get($this->endpoint($id), null, $query);
    }
}