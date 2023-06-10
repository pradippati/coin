# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

> **Note:** In the years since releasing Lumen, PHP has made a variety of wonderful performance improvements. For this reason, along with the availability of [Laravel Octane](https://laravel.com/docs/octane), we no longer recommend that you begin new projects with Lumen. Instead, we recommend always beginning new projects with [Laravel](https://laravel.com).

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Prerequisites:
---------------------------------------------------

PHP (>= 7.3) with the necessary extensions (e.g., OpenSSL, PDO, Mbstring, etc.)
Composer (a dependency management tool for PHP)


Create a new Lumen project:
-----------------------------------------------------------------
composer create-project --prefer-dist laravel/lumen project-name
---------------------------------------------------------------------------------------
Replace "project-name" with the desired name for your project.


cd project-name
------------------------------

Open the .env file and configure your database connection settings 
--------------------------------------------------------------------------------------

php -S localhost:8000 -t public
--------------------------------------------
This will start the server, and you can access your Lumen application at http://localhost:8000.

Create the artisan command:
-------------------------------------------------
In your Laravel/Lumen project, open a command line interface and navigate to the project directory. Then run the following command to create a new artisan command:

php artisan make:command FetchCoins
-------------------------------------------------