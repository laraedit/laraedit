# LaraEdit [![Build Status](https://travis-ci.org/laraedit/laraedit.svg?branch=master)](https://travis-ci.org/laraedit/laraedit)
An Application Management Platform for Laravel

```
WARNING: DO NOT INSTALL THIS PACKAGE IN A PRODUCTION ENVIRONMENT
```

## About LaraEdit
The goal behind LaraEdit is to provide a development environment that can be accessed from the web to allow developers to work from anywhere, using any device (that has internet access and a modern web browser). Beyond that, LaraEdit should NOT force it's users to adhere to any coding standards and allow them to work/develop as they normally would, just in a more productive manner.

If this sounds like it may be too good to be true, stick around and watch this magic happen. If your wondering what such a package would even be good for, move along. If you are curious, [ask your questions in the issues](https://github.com/laraedit/laraedit/issues)

## Installation
```
WARNING: This package is still a work in progress and may not work as expected. 
```
1. Require LaraEdit in your Laravel project
```
composer require laraedit/laraedit
```
2. Add the service provider to your `config/app.php` providers array
```
LaraEdit\LaraEditServiceProvider::class,
```
3. Publish the LaraEdit assets by entering the following artisan command:
```
php artisan vendor:publish
```
4. Visit the `/laraedit` route in your broswer to get started!

## Troubleshooting
If you are getting an error when requiring the LaraEdit package, simply add the following to your composer.json file and try again:
```
"minimum-stability": "dev"
```
