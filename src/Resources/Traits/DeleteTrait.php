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
     * Update a resource
     * 
     * @param int $id
     * @param array $data
     * @return array|null
     */
    public function delete($id)
    {
        return $this->request->delete($this->endpoint($id));
    }
}