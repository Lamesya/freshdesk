<?php

namespace Lamesya\Freshdesk\Http;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\RequestOptions;

class FreshdeskClient implements Client
{
    /**
     * The Guzzle client instance.
     *
     * @var Client
     */
    protected $client;

    /**
     * GuzzleClient constructor.
     *
     * @param $url
     * @param $token
     */
    public function __construct($url, $token)
    {
        list($headers, $query) = [[], []];

        $headers['Authorization'] = 'Bearer ' . base64_encode("$token:X");

        $this->client = new GuzzleClient([
            'base_uri'          => $url,
            'allow_redirects'   => false,
            'headers'           => $headers,
            'query'             => $query
        ]);
    }

    /**
     * Perform a GET request.
     *
     * @param       $url
     * @param array $parameters
     * @return Json
     */
    public function get($url, $parameters = [])
    {
        return $this->execute(new GuzzleRequest('GET', $url), [RequestOptions::JSON => $parameters]);
    }

    /**
     * Perform a POST request.
     *
     * @param       $url
     * @param array $parameters
     * @return Json
     */
    public function post($url, $parameters = [])
    {
        return $this->execute(new GuzzleRequest('POST', $url), [RequestOptions::JSON => $parameters]);
    }

    /**
     * Perform a PUT request.
     *
     * @param       $url
     * @param array $parameters
     * @return Json
     */
    public function put($url, $parameters = [])
    {
        return $this->execute(new GuzzleRequest('PUT', $url), [RequestOptions::JSON => $parameters]);
    }

    /**
     * Perform a DEDLETE request.
     *
     * @param       $url
     * @param array $parameters
     * @return Json
     */
    public function delete($url, $parameters = [])
    {
        return $this->execute(new GuzzleRequest('DELETE', $url), [RequestOptions::JSON => $parameters]);
    }

    /**
     * Execute the request and returns the Response object.
     *
     * @param GuzzleRequest $request
     * @param array $options
     * @param null $client
     * @return Json
     */
    protected function execute(GuzzleRequest $request, array $options = [], $client = null)
    {
        $client = $client ?: $this->getClient();

        try {
            $response = $client->send($request, $options);
        } catch (BadResponseException $e) {
            $response = $e->getResponse();
        }

        return json_decode($response->getBody(), true);
    }

    /**
     * Return the client.
     *
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }
}