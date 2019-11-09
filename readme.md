# Example PHP app using [Lumen Framework](https://lumen.laravel.com)

## Installation

This example use [Composer](https://getcomposer.org) most common dependency manager for PHP.
All builds should use composer for all necessary stuff like downloading configuration, run test or DB migration.
You can do it easly using [composer scripts](https://getcomposer.org/doc/articles/scripts.md).

Simply run:
```
composer install
``` 
To run tests one from below, run:

```
test-e2e
test-smoke
test-apicompatibility
```
Those are predefined for cloudfoundry purposes.
If you use other names, you must map them so that they fit predefined ones.

## License

The [Lumen Framework](https://lumen.laravel.com) is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
