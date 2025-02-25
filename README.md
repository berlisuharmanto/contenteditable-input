# Just a custom filament form field for whatever you need

Just a simple custom filament form field, it implements contenteditable html just like text input on chat apps. Made it because I tired of simple textarea and want to use this method in my projects.



https://github.com/user-attachments/assets/bee76f15-d020-4037-bf15-db7d79d2ca25



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
