# laravel-markdown

Provides a simple Laravel 5.* wrapper for Michelf\Markdown package https://github.com/michelf/php-markdown so that it's string method can be used as a Laravel Facade. It will "transform the Markdown from the given string and return it."

Due to the deprecation of Laravel's Service Provider `$defer` property, this packake will not currently work with Laravel 6.0

## Installation

Use composer

```bash
composer require rmpenterprise/laravel-markdown
```

## Usage

```php
LaravelMarkdown::string('# This is a title');
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
