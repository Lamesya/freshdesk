<?php

namespace Lamesya\Freshdesk;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Resources\Agent agent()
 * @method static Resources\Contact contact()
 * @method static Resources\ContactField Contact_field()
 * @method static Resources\Group group()
 * @method static Resources\Role role()
 * @method static Resources\SlaPolicies sla_policies()
 * @method static Resources\Ticket ticket()
 * @method static Resources\TicketField ticket_field()
 * @method static Resources\TicketForm ticket_form()
 * @method static Resources\TimeEntry time_entry()
 * @property-read Resources\Agent $agent
 * @property-read Resources\Contact $contact
 * @property-read Resources\ContactField $contact_field
 * @property-read Resources\Group $group
 * @property-read Resources\Role $role
 * @property-read Resources\SlaPolicies $sla_policies
 * @property-read Resources\Ticket $ticket
 * @property-read Resources\TicketField $ticket_field
 * @property-read Resources\TicketForm $ticket_form
 * @property-read Resources\TimeEntry $time_entry
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