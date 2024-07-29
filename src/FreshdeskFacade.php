<?php

namespace Lamesya\Freshdesk;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Resources\Ticket ticket()
 * @property-read Resources\Ticket $ticket
 */
class FreshdeskFacade extends Facade
{    
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor()
    {
        return 'freshdesk';
    }
}