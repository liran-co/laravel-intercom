# laravel-intercom

[![Latest Version on Packagist](https://img.shields.io/packagist/v/liran-co/laravel-intercom.svg?style=flat-square)](https://packagist.org/packages/liran-co/laravel-intercom)
[![Total Downloads](https://img.shields.io/packagist/dt/liran-co/laravel-intercom.svg?style=flat-square)](https://packagist.org/packages/liran-co/laravel-intercom)

A simple wrapper for the [Intercom PHP library](https://github.com/intercom/intercom-php).

## Installation

You can install the package via composer:

```bash
composer require liran-co/laravel-intercom
```

## Usage

Add the `INTERCOM_ACCESS_TOKEN` variable into your `.env` file.

``` php
use Intercom;

// ...

Intercom::users()->getUsers();
```

That's it! Refer to [Intercom PHP](https://github.com/intercom/intercom-php) for usage information.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.