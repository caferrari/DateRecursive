# caferrari\DateRecursive
[![Build Status](https://secure.travis-ci.org/caferrari/DateRecursive.png)](http://travis-ci.org/caferrari/DateRecursive)
[![Coverage Status](https://coveralls.io/repos/caferrari/DateRecursive/badge.png?branch=master)](https://coveralls.io/r/caferrari/DateRecursive?branch=master)
[![Total Downloads](https://poser.pugx.org/ferrari/date-recursive/downloads.png)](https://packagist.org/packages/ferrari/date-recursive)
[![License](https://poser.pugx.org/ferrari/date-recursive/license.png)](https://packagist.org/packages/ferrari/date-recursive)
[![Latest Stable Version](https://poser.pugx.org/ferrari/date-recursive/v/stable.png)](https://packagist.org/packages/ferrari/date-recursive)
[![Latest Unstable Version](https://poser.pugx.org/ferrari/date-recursive/v/unstable.png)](https://packagist.org/packages/ferrari/date-recursive)

## Installation

Package is available on [Packagist](https://packagist.org/packages/ferrari/date-recursive), you can install it
using [Composer](http://getcomposer.org).

```bash
composer require ferrari/date-recursive
```

## Usage

```
// the next five dates with a day 15 at Tuesday 
$dates = (new DateRecursive)->match(
    DateRecursive::dayOfMonth(15),
    DateRecursive::dayOfWeek(2)
)
->limit(5)
->generate(new DateTime('2014-01-01'));
```
