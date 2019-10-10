<img src="https://static.germania-kg.com/logos/ga-logo-2016-web.svgz" width="250px">

------



# Germania KG · Opening Hours

[![Packagist](https://img.shields.io/packagist/v/germania-kg/opening-hours.svg?style=flat)](https://packagist.org/packages/germania-kg/opening-hours)
[![PHP version](https://img.shields.io/packagist/php-v/germania-kg/opening-hours.svg)](https://packagist.org/packages/germania-kg/opening-hours)
[![Build Status](https://img.shields.io/travis/GermaniaKG/OpeningTimes.svg?label=Travis%20CI)](https://travis-ci.org/GermaniaKG/OpeningTimes)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/GermaniaKG/OpeningTimes/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/GermaniaKG/OpeningTimes/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/GermaniaKG/OpeningTimes/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/GermaniaKG/OpeningTimes/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/GermaniaKG/OpeningTimes/badges/build.png?b=master)](https://scrutinizer-ci.com/g/GermaniaKG/OpeningTimes/build-status/master)



## Installation with Composer

```bash
$ composer require germania-kg/opening-hours
```



## Usage

**OpeningTimesInterface**

```php
interface Germania\OpeningTimes\OpeningTimesInterface

public function getDay( string $day ) : ?string;
public function setDay( string $day, string $times = null );

public function getMonday()    : ?string;
public function getTuesday()   : ?string;
public function getWednesday() : ?string;
public function getThursday()  : ?string;
public function getFriday()    : ?string;
public function getSaturday()  : ?string;
public function getSunday()    : ?string;  
```

**Class OpeningTimes**

```php
use Germania\OpeningTimes\OpeningTimes;

$open = new OpeningTimes;

$open->setDay("monday", "09 to 18");
$open->getDay("monday"); // "09 to 18"

$open->getMonday(); // null
echo $open->setMonday("whole day")->getMonday(); // "whole day"

// and also these Setters:
// - setMonday()
// - setTuesday()
// - setWednesday()
// - setThursday()
// - setFriday()
// - setSaturday()
// - setSunday()
```



## Issues

See [full issues list.][i0]

[i0]: https://github.com/GermaniaKG/OpeningTimes/issues



## Roadmap

Fill in planned or desired features



## Development

```bash
$ git clone https://github.com/GermaniaKG/OpeningTimes.git
$ cd OpeningTimes
$ composer install
```



## Unit tests

Either copy `phpunit.xml.dist` to `phpunit.xml` and adapt to your needs, or leave as is. Run [PhpUnit](https://phpunit.de/) test or composer scripts like this:

```bash
$ composer test
# or
$ vendor/bin/phpunit
```