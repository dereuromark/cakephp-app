# CakePHP Application Skeleton
[![PHPStan](https://img.shields.io/badge/PHPStan-level%208-brightgreen.svg?style=flat-square)](https://github.com/phpstan/phpstan)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 5.x.

This is a **[Bootstrap](https://getbootstrap.com/) flavored app skeleton**
- community fork from original [app](https://github.com/cakephp/app)
- enhanced code sniffer included
- IdeHelper and PHPStan ready out of the box

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation
Download the code.

Composer install the app.

    composer install

Then use docker (e.g. ddev) to set up a server.

    ddev start

Then visit `https://app.ddev.site/` to see the welcome page.

## Configuration

Read and edit the environment specific `config/app_local.php` and set up the
`'Datasources'` and any other configuration relevant for your application.
Other environment agnostic settings can be changed in `config/app.php`.

Configuration enhancements:
- app_custom.php added in between app.php (all defaults) and local one.

## Layout

This app skeleton uses BS 5, and in particular a npm based install:

- `composer assets` to run basic script here
- FA 6 icons included
