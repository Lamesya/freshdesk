<?php

namespace Lamesya\Freshdesk\Http;

/**
 * Request
 */
class Request
{
    /**
     * The Http client instance.
     *
     * @var Client
     */
    protected $client;

    /**
     * Request constructor
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Magic Method
     * @param       $name
     * @param array $args
     * @return Response
     */
    public function __call($name, $args = [])
    {
        if (in_array($name, ['get', 'post', 'put', 'patch', 'delete']))
        {
            return call_user_func_array([$this->client, $name], $args);
        }
    }
}