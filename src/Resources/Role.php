<?php

namespace Lamesya\Freshdesk\Resources;

use Lamesya\Freshdesk\Resources\AbstractResource;
use Lamesya\Freshdesk\Resources\Traits\AllTrait;
use Lamesya\Freshdesk\Resources\Traits\CreateTrait;
use Lamesya\Freshdesk\Resources\Traits\DeleteTrait;
use Lamesya\Freshdesk\Resources\Traits\UpdateTrait;
use Lamesya\Freshdesk\Resources\Traits\ViewTrait;

/**
 * Role resource
 * 
 * @package Lamesya\Freshdesk\Resources
 */
class Role extends AbstractResource
{
    use AllTrait, ViewTrait;

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = 'roles';
}