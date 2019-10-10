<img src="https://static.germania-kg.com/logos/ga-logo-2016-web.svgz" width="250px">

------



# Germania KG · OpeningTimes



## Installation

```bash
$ composer require germania-kg/openingtimes
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

