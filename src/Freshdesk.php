<?php

namespace Lamesya\Freshdesk;

use Illuminate\Support\Str;
use Lamesya\Freshdesk\Resources\Agent;
use Lamesya\Freshdesk\Resources\Contact;
use Lamesya\Freshdesk\Resources\ContactField;
use Lamesya\Freshdesk\Resources\Group;
use Lamesya\Freshdesk\Resources\Role;
use Lamesya\Freshdesk\Resources\SlaPolicies;
use Lamesya\Freshdesk\Resources\Ticket;
use Lamesya\Freshdesk\Resources\TicketField;
use Lamesya\Freshdesk\Resources\TicketForm;
use Lamesya\Freshdesk\Resources\TimeEntry;
use Lamesya\Freshdesk\Http\FreshdeskClient;

/**
 * @method Agent agent()
 * @method Contact contact()
 * @method ContactField Contact_field()
 * @method Group group()
 * @method Role role()
 * @method SlaPolicies sla_policies()
 * @method Ticket ticket()
 * @method TicketField ticket_field()
 * @method TicketForm ticket_form()
 * @method TimeEntry time_entry()
 * @property-read Agent $agent
 * @property-read Contact $contact
 * @property-read ContactField $contact_field
 * @property-read Group $group
 * @property-read Role $role
 * @property-read SlaPolicies $sla_policies
 * @property-read Ticket $ticket
 * @property-read TicketField $ticket_field
 * @property-read TicketForm $ticket_form
 * @property-read TimeEntry $time_entry
 * @package Freshdesk
 */
class Freshdesk
{
    /**
     * The base URI.
     * 
     * @var string
     */
    private $baseURI;

    /**
     * The API token.
     *
     * @var string
     */
    protected $token;

    /**
     * Constructs a new api instance
     * @param $apiKey
     * @param $domain
     */
    public function __construct($token = '', $uri = '')
    {
        $this->token = $token;
        $this->baseURI = $uri;
    }

    /**
     * Get the resource instance.
     *
     * @param $resource
     * @return mixed
     */
    public function make($resource)
    {
        $class = $this->resolveClassPath($resource);

        return new $class($this->getClient());
    }

    /**
     * Get the resource path.
     *
     * @param $resource
     * @return string
     */
    protected function resolveClassPath($resource)
    {
        return 'Lamesya\\Freshdesk\\Resources\\' . Str::studly($resource);
    }

    /**
     * Get the HTTP client instance.
     *
     * @return Client
     */
    protected function getClient()
    {
        return new FreshdeskClient($this->getBaseURI(), $this->token);
    }

    /**
     * Get the base URI.
     *
     * @return string
     */
    public function getBaseURI()
    {
        return $this->baseURI;
    }

    /**
     * Set the token.
     *
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * Any reading will return a resource.
     *
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->make($name);
    }

    /**
     * Methods will also return a resource.
     *
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        if (! in_array($name, get_class_methods(get_class()))) {
            return $this->{$name};
        }
    }
}