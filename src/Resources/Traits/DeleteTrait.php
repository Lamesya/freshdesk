<?php

namespace Lamesya\Freshdesk\Resources\Traits;

/**
 * Delete Trait
 *
 * @package Lamesya\Freshdesk\Resources\Traits
 */
trait DeleteTrait
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
    public function delete($id)
    {
        return $this->api()->delete($this->endpoint($id));
    }
}