<?php

namespace Lamesya\Freshdesk\Resources;

use Lamesya\Freshdesk\Resources\AbstractResource;
use Lamesya\Freshdesk\Resources\Traits\AllTrait;
use Lamesya\Freshdesk\Resources\Traits\CreateTrait;
use Lamesya\Freshdesk\Resources\Traits\DeleteTrait;
use Lamesya\Freshdesk\Resources\Traits\UpdateTrait;
use Lamesya\Freshdesk\Resources\Traits\ViewTrait;

/**
 * Time entries resource
 * 
 * @package Lamesya\Freshdesk\Resources
 */
class TimeEntry extends AbstractResource
{
    use AllTrait, ViewTrait, UpdateTrait, DeleteTrait;

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = 'time_entries';

    /**
     * Create a Time Entry
     * 
     * @param array $data
     * @return array|null
     */
    public function create($id, array $data)
    {
        $end = sprintf('tickets/%s/time_entries', $id);

        return $this->api()->post($this->endpoint($end), $data);
    }
}