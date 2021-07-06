# LaraKafka

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![StyleCI][ico-styleci]][link-styleci]

Extention package for `werk365/larakafka` to support producing activity logged by spatie's activitylogger automatically. 

This package requires [spatie/laravel-activitylog](https://github.com/spatie/laravel-activitylog) to support Kafka based activity logging.

## Installation

Via Composer

``` bash
$ composer require werk365/larakafka-activity
```



### Produce Through Activity Logging
Simply enable activity logging on your models according to the [documentation](https://spatie.be/docs/laravel-activitylog/v3/advanced-usage/logging-model-events).

This will enable automatic activity logging to a topic corresponding to your application name.

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing


WIP

``` bash
$ composer test
```


## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Hergen Dillema][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/werk365/larakafka-activity.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/werk365/larakafka-activity.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/werk365/larakafka-activity/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/321376691/shield

[link-packagist]: https://packagist.org/packages/werk365/larakafka-activity
[link-downloads]: https://packagist.org/packages/werk365/larakafka-activity
[link-travis]: https://travis-ci.org/werk365/larakafka
[link-styleci]: https://styleci.io/repos/321376691
[link-author]: https://github.com/HergenD
[link-contributors]: ../../contributors
