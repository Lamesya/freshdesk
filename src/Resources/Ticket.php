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
     * List All Conversations of a Ticket
     * 
     * @param int $id The ticket id
     * @param array|null $query
     * @return mixed|null
     */
    public function conversations($id, array $query = null)
    {
        $end = sprintf('%s/conversations', $id);

        return $this->api()->get($this->endpoint($end), $query);
    }

    /**
     * List All Time Entries of a Ticket
     * 
     * @param int $id The ticket id
     * @param array|null $query
     * @return mixed|null
     */
    public function time_entries($id, array $query = null)
    {
        $end = sprintf('%s/time_entries', $id);

        return $this->api()->get($this->endpoint($end), $query);
    }

    /**
     * List All Satisfaction Ratings of a Ticket
     * 
     * @param int $id The ticket id
     * @param array|null $query
     * @return mixed|null
     */
    public function satisfaction_ratings($id, array $query = null)
    {
        $end = sprintf('%s/satisfaction_ratings', $id);

        return $this->api()->get($this->endpoint($end), $query);
    }

    /**
     * Ticket Summary
     * 
     * @param int $id The ticket id
     * @param array|null $query
     * @return mixed|null
     */
    public function summary($id)
    {
        $end = sprintf('%s/summary', $id);

        return $this->api()->get($this->endpoint($end));
    }
}