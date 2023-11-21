# TextInput with a select affix

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marvinosswald/filament-input-select-affix.svg?style=flat-square)](https://packagist.org/packages/marvinosswald/filament-input-select-affix)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/marvinosswald/filament-input-select-affix/run-tests?label=tests)](https://github.com/marvinosswald/filament-input-select-affix/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/marvinosswald/filament-input-select-affix/Check%20&%20fix%20styling?label=code%20style)](https://github.com/marvinosswald/filament-input-select-affix/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marvinosswald/filament-input-select-affix.svg?style=flat-square)](https://packagist.org/packages/marvinosswald/filament-input-select-affix)



this input enables you to render a select next to an input in a seamless fashion.

![example](https://github.com/marvinosswald/filament-input-select-affix/blob/main/.github/images/example.png?raw=true)
![dark example](https://github.com/marvinosswald/filament-input-select-affix/blob/main/.github/images/example_dark.png?raw=true)


## Installation

You can install the package via composer:

```bash
composer require marvinosswald/filament-input-select-affix
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-input-select-affix-views"
```

## Usage

```php
TextInputSelectAffix::make('weight_value')
->numeric()
->select(fn() => Forms\Components\Select::make('weight_unit')
    ->extraAttributes([
        'class' => 'w-[72px]' // if you want to constrain the selects size, depending on your usecase
    ])
    ->options([
    'mm' => 'mm',
    'm' => 'm'
]),
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

- [Marvin Osswald](https://github.com/marvinosswald)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
