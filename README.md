# Dingo Api Sanctum Auth

[![Latest Version on Packagist](https://img.shields.io/packagist/v/slps970093/dingo-sanctum.svg?style=flat-square)](https://packagist.org/packages/slps970093/dingo-sanctum)
[![Total Downloads](https://img.shields.io/packagist/dt/slps970093/dingo-sanctum.svg?style=flat-square)](https://packagist.org/packages/slps970093/dingo-sanctum)
![GitHub Actions](https://github.com/slps970093/dingo-sanctum/actions/workflows/main.yml/badge.svg)


## Installation

You can install the package via composer:

```bash
composer require slps970093/dingo-sanctum
```

## Usage

in config/api.php

```php
'auth' => [ 
    'sanctum' => \Slps970093\DingoSanctum\SanctumSPA::class 
],
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email slps970093@gmail.com instead of using the issue tracker.

## Credits

-   [Chou, Yu-Hsien](https://github.com/slps970093)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
