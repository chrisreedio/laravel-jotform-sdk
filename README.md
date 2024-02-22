# Provides an SDK for Jotforms API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chrisreedio/laravel-jotform-sdk.svg?style=flat-square)](https://packagist.org/packages/chrisreedio/laravel-jotform-sdk)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/chrisreedio/laravel-jotform-sdk/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/chrisreedio/laravel-jotform-sdk/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/chrisreedio/laravel-jotform-sdk/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/chrisreedio/laravel-jotform-sdk/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/chrisreedio/laravel-jotform-sdk.svg?style=flat-square)](https://packagist.org/packages/chrisreedio/laravel-jotform-sdk)

This package provides a Laravel wrapper for the Jotform SDK/API.

The goal is to streamline the usage in a Laravel application by auto-injecting the API key from the config file.

## Installation

You can install the package via composer:

```bash
composer require chrisreedio/laravel-jotform-sdk
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-jotform-sdk-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-jotform-sdk-config"
```

This is the contents of the published config file:

```php
return [
    'api_key' => env('JOTFORM_API_KEY'),
];
```

## Usage

```php
use ChrisReedIO\JotformSDK\Facades\JotformSDK;
$folders = JotformSDK::api()
    ->getFolders();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Chris Reed](https://github.com/chrisreedio)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
