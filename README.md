# Just a custom filament form field for whatever you need

[![Latest Version on Packagist](https://img.shields.io/packagist/v/berlisuharmanto/contenteditable-input.svg?style=flat-square)](https://packagist.org/packages/berlisuharmanto/contenteditable-input)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/berlisuharmanto/contenteditable-input/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/berlisuharmanto/contenteditable-input/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/berlisuharmanto/contenteditable-input/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/berlisuharmanto/contenteditable-input/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/berlisuharmanto/contenteditable-input.svg?style=flat-square)](https://packagist.org/packages/berlisuharmanto/contenteditable-input)



Just a simple custom filament form field, it implements contenteditable html just like text input on chat apps. Made it because I tired of simple textarea and want to use this method in my projects.

## Installation

You can install the package via composer:

```bash
composer require berlisuharmanto/contenteditable-input
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="contenteditable-input-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="contenteditable-input-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="contenteditable-input-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$contenteditableInput = new Berlisuharmanto\ContenteditableInput();
echo $contenteditableInput->echoPhrase('Hello, Berlisuharmanto!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Berli Suharmanto](https://github.com/berlisuharmanto)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
