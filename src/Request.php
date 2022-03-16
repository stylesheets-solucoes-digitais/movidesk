<?php

namespace Stylesheets\Movidesk;

use GuzzleHttp\Client;

class request
{
    protected $client;
    protected $baseUri = "https://api.movidesk.com/public/v1/";
    protected $path;
    protected $token;
    protected $url;

    public function __construct($path, $token)
    {
        $this->path = $path;
        $this->token = $token;
        $this->setUrl();
        $this->client = new Client();
    }

    public function get(array $query = [])
    {
        $query = array_merge(['token' => $this->token]);
        $response = $this->client->get($this->url, ['query' => $query]);
        return $response->getBody()->getContents();
    }

    public function post(array $data)
    {
    }

    protected function setUrl()
    {
        $this->url = $this->baseUri . $this->path;
        return $this;
    }
}
