<?php

namespace WDevs\LaravelZenserp;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use WDevs\LaravelZenserp\Endpoints\SearchEndpoint;

class LaravelZenserp
{

    /**
     * @var PendingRequest
     */
    private $client;

    public static $API_ROUTE = 'https://app.zenserp.com/api/v2/';

    /**
     * @var SearchEndpoint
     */
    private $searchEndpoint;

    public function __construct()
    {
        $this->client = Http::withOptions([
            // Base URI is used with relative requests
            'base_uri' => self::$API_ROUTE
        ]);


    }


    /**
     * @return SearchEndpoint
     */
    public function search(): SearchEndpoint
    {
        if ( ! isset($this->searchEndpoint) || is_null($this->searchEndpoint)) {
            $this->setSearchEndpoint(new SearchEndpoint($this->client));
        }

        return $this->searchEndpoint;
    }


    /**
     * @param SearchEndpoint $endpoint
     */
    private function setSearchEndpoint(SearchEndpoint $endpoint)
    {
        $this->searchEndpoint = $endpoint;
    }
}
