<?php

namespace WDevs\LaravelZenserp\Tests;

use Illuminate\Foundation\Application;
use Illuminate\Http\Client\RequestException;
use Orchestra\Testbench\TestCase;
use WDevs\LaravelZenserp\LaravelZenserp;
use WDevs\LaravelZenserp\Providers\LaravelZenserpServiceProvider;

class ZenserpTest extends TestCase
{

    /**
     * Define environment setup.
     *
     * @param Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('zenserp.api_key', env('ZENSERP_API_KEY'));
    }


    protected function getPackageProviders($app)
    {
        return [LaravelZenserpServiceProvider::class];
    }


    /**
     * @test
     */
    function it_should_be_able_to_call_the_search_endpoint()
    {
        $api = new LaravelZenserp();
        try {
            $response = $api->search()->searchFor('Pied Piper');

            $this->assertTrue(isset($response['organic']));

        } catch (RequestException $e) {
            $this->assertEquals(true, false);
        }
    }
}
