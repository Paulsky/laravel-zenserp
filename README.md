# DEPRECATED | NOT MAINTAINED ANYMORE 
## Zenserp does not provide any support or answers any questions regarding their API

# Zenserp Laravel API Client

Laravel package for the [Zenserp](https://zenserp.com/documentation) API.

## Getting Started

Run the following command to install this package into your project.

``` bash
composer require wdevs/laravel-zenserp
```

Optional: publish the config files with the following command:

``` bash
php artisan vendor:publish --provider="WDevs\LaravelZenserp\Providers\LaravelZenserpServiceProvider"
```

Set the environment variables in your .env file like this:

``` bash
ZENSERP_API_KEY="YOURAPIKEY"
```

### Prerequisites

You will need Composer to install this package and a valid Zenserp API key.

### Installing

After installing this package with Composer, create a new Zenserp instance. And set the your Zenserp API key in your env file. 

Something like this:

```
$client = new LaravelZenserp();
```

And call the desired endpoint

```
$client->search()->searchFor('Pied Piper');
```

The current implemented endpoints are: 

* GET   /search

Documentation for the available parameters can be found here: [https://zenserp.com/documentation](https://zenserp.com/documentation)

## Running the tests

Copy the phpunit.xml.dist and rename it to phpunit.xml. Set the env variables in the phpunit.xml files.

PLEASE NOTE: running the tests will cost you credits!!!!

* ZENSERP_API_KEY:  A valid Zenserp API key

Please see the phpunit.xml.dist for the template.

Run the tests in the Tests directory with PHPUnit.


## Built With

* [Zenserp](https://zenserp.com) - For the API
* [PHPUnit](https://github.com/sebastianbergmann/phpunit/) - Test Framework
* [Laravel](https://github.com/laravel/framework) - Package Framework
* [Laravel Package Boilerplate](https://laravelpackageboilerplate.com) - For boiler template this package

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

### Contributing

Please help us to develop this package. Every input and/or feedback is really appreciated! Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email us instead of using the issue tracker.

### Credits

- [All Contributors](../../contributors)

### License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
