<?php

namespace Lamesya\Freshdesk\Resources;

use Lamesya\Freshdesk\Resources\AbstractResource;
use Lamesya\Freshdesk\Resources\Traits\AllTrait;
use Lamesya\Freshdesk\Resources\Traits\CreateTrait;
use Lamesya\Freshdesk\Resources\Traits\DeleteTrait;
use Lamesya\Freshdesk\Resources\Traits\UpdateTrait;
use Lamesya\Freshdesk\Resources\Traits\ViewTrait;

/**
 * Group resource
 * 
 * @package Lamesya\Freshdesk\Resources
 */
class Group extends AbstractResource
{
    use AllTrait, CreateTrait, ViewTrait, UpdateTrait, DeleteTrait;

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = 'groups';
}