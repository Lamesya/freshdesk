<?php

namespace Lamesya\Freshdesk\Resources;

use Lamesya\Freshdesk\Resources\AbstractResource;
use Lamesya\Freshdesk\Resources\Traits\AllTrait;
use Lamesya\Freshdesk\Resources\Traits\CreateTrait;
use Lamesya\Freshdesk\Resources\Traits\DeleteTrait;
use Lamesya\Freshdesk\Resources\Traits\UpdateTrait;
use Lamesya\Freshdesk\Resources\Traits\ViewTrait;

/**
 * Ticket resource
 * 
 * @package Lamesya\Freshdesk\Resources
 */
class Ticket extends AbstractResource
{
    use AllTrait, CreateTrait, ViewTrait, UpdateTrait, DeleteTrait;

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = 'tickets';

    /**
     * Restore a Ticket
     * 
     * @param $id
     * @return mixed|null
     */
    public function restore($id)
    {
        $end = sprintf('%s/restore', $id);

        return $this->api()->put($this->endpoint($end));
    }

    /**
     * List conversations associated with a ticket
     * 
     * @param int $id The ticket id
     * @param array|null $query
     * @return mixed|null
     */
    public function conversations($id, array $query = null)
    {
        $end = sprintf('%s/conversations', $id);

        return $this->api()->request('GET', $this->endpoint($end), null, $query);
    }
}