<?php

namespace Lamesya\Freshdesk\Resources;

use Lamesya\Freshdesk\Http\Request;

/**
 * Resource
 */
abstract class Resource
{
    /**
     * @var string
     */
    protected $endpoint;

    /**
     * The API caller object.
     *
     * @var Request
     */
    protected $request;

    /**
     * Resource constructor
     * 
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
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