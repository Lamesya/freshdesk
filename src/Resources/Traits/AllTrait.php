<?php

namespace Lamesya\Freshdesk\Resources\Traits;

use Symfony\Component\VarDumper\VarDumper;

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
     * Get a list of all resources
     * 
     * @param array $options
     * @return Response
     */
    public function all(array $options = [])
    {
        return $this->request->get($this->endpoint(), $options);
    }
}