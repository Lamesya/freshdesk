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
     * Update a resource
     * 
     * @param int $id
     * @param null array $query
     * @return array|null
     */
    public function view($id, array $query = null)
    {
        return $this->request->get($this->endpoint($id), $query);
    }
}