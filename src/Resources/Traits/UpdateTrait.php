<?php

namespace Lamesya\Freshdesk\Resources\Traits;

/**
 * Update Trait
 *
 * @package Lamesya\Freshdesk\Resources\Traits
 */
trait UpdateTrait
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
     * @param array $data
     * @return array|null
     */
    public function update($id, array $data)
    {
        return $this->api()->put($this->endpoint($id), $data);
    }
}