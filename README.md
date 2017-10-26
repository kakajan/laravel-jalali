kakajan/laravel-jalali
======

This Package helps developers to easily work with Jalali (Shamsi or Iranian) dates in Laravel 5.5+ applications.

<a name="installation"></a>
## Installation

In the `require` key of `composer.json` file add the following

```yml
    "kakajan/laravel-jalali": "dev-master"
```

Run the Composer update comand

    $ composer update

Or just run command

    $ composer require kakajan/laravel-jalali


In your `config/app.php` add `'jDate\Jalali\JalaliServiceProvider'` to the end of the `$providers` array

```php
    'providers' => array(

        ...
        jDate\Jalali\JalaliServiceProvider::class,

    ),
```

<a name="basic-usage"></a>
## Basic Usage
## Examples ##

Some Examples

```php
// default timestamp is now
$date = jDate::forge();

// pass timestamps
$date = jDate::forge(1333857600);

// pass strings to make timestamps
$date = jDate::forge('last sunday');

// get the timestamp
$date = jDate::forge('last sunday')->time(); // 1333857600

// format the timestamp
$date = jDate::forge('last sunday')->format('%B %d، %Y'); // دی 02، 1391

// get a predefined format
$date = jDate::forge('last sunday')->format('datetime'); // 1391-10-02 00:00:00
$date = jDate::forge('last sunday')->format('date'); // 1391-10-02
$date = jDate::forge('last sunday')->format('time'); // 00:00:00

// amend the timestamp value, relative to existing value
$date = jDate::forge('2012-10-12')->reforge('+ 3 days')->format('date'); // 1391-07-24

// get relative 'ago' format
$date = jDate::forge('now - 10 minutes')->ago() // ۱۰ دقیقه پیش
```


## Formatting ##

For help in building your formats, checkout the [PHP strftime() docs](http://php.net/manual/en/function.strftime.php).

## Notes ##

The class relies on ``strtotime()`` to make sense of your strings, and ``strftime()`` to make the format changes.  Just always check the ``time()`` output to see if you get false timestamps... which means the class couldn't understand what you were telling it.

## License ##
- This bundle is created based on [Laravel-Date](https://github.com/swt83/laravel-date) by [Scott Travis](https://github.com/swt83) (MIT Licensed).  
- [Jalali (Shamsi) DateTime](https://github.com/sallar/jDateTime) class included in the package is created by [Sallar Kaboli](http://sallar.me) and is released under the MIT License. 
- This package was originally created by [Milad Rey](http://milad.io) and is released under the MIT License.
- Updated for Laravel 5.5+ by [kakajn](https://aybook.ir) - https://aykam.org.
