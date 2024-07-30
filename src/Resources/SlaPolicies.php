<?php

namespace Lamesya\Freshdesk\Resources;

use Lamesya\Freshdesk\Resources\Resource;
use Lamesya\Freshdesk\Resources\Traits\AllTrait;
use Lamesya\Freshdesk\Resources\Traits\CreateTrait;
use Lamesya\Freshdesk\Resources\Traits\DeleteTrait;
use Lamesya\Freshdesk\Resources\Traits\UpdateTrait;
use Lamesya\Freshdesk\Resources\Traits\ViewTrait;

/**
 * SLA Policies resource
 * 
 * @package Lamesya\Freshdesk\Resources
 */
class SlaPolicies extends Resource
{
    use AllTrait, CreateTrait, ViewTrait, UpdateTrait, DeleteTrait;

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = 'sla_policies';
}