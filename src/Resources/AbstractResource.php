<?php

namespace Lamesya\Freshdesk\Resources;

use Lamesya\Freshdesk\Http\FreshdeskClient;

/**
 * Abstract Resource
 */
abstract class AbstractResource
{
    /**
     * @var Lamesya\Freshdesk\Http\FreshdeskClient
     */
    private $api;

    /**
     * @var string
     */
    protected $endpoint;

    /**
     * Resource constructor
     * 
     * @param Lamesya\Freshdesk\Http\FreshdeskClient
     */
    public function __construct(FreshdeskClient $api)
    {
        $this->api = $api;
    }

    /**
     * @return Lamesya\Freshdesk\Http\FreshdeskClient
     */
    protected function api()
    {
        return $this->api;
    }

    /**
     * Creates the endpoint
     *
     * @param null $id The endpoint terminator
     * @return string
     *
     */
    protected function endpoint($id = null)
    {
        return $id === null ? $this->endpoint : $this->endpoint . '/' . $id;
    }
}