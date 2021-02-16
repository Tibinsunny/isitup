# isitup 🦄
isitup is a simple php library which allows users to check if a host is up without using CURL or PING

## Installation 📩
`composer require tibinsunny/isitup`

## 🔨 Usage 🔨

```
use isitup\isitup;
$instance=new isitup();
$host=$instance->check("https://packagist.org/");
```
`$host` will contain a boolean value after checking if the host is up or not.
i.e, `$host` will return `TRUE` | `1` if the site is rechable else it will return `FALSE` | `0`


## Sample Code 
```
<?php
//importing autoload.php
require_once __DIR__ . './vendor/autoload.php';

use isitup\isitup;
$instance=new isitup();
$host=$instance->check("https://packagist.org/");
echo $host;
?>
```
The above code returnts a code `1` which indicates that the site is rechable.