# ![RealWorld Example App](logo.png)

> ### [Phel](https://phel-lang.org/) codebase containing real world examples (CRUD, auth, advanced patterns, etc) that adheres to the [RealWorld](https://github.com/gothinkster/realworld) spec and API.


### [Demo](https://demo.realworld.io/)&nbsp;&nbsp;&nbsp;&nbsp;[RealWorld](https://github.com/gothinkster/realworld)


This codebase was created to demonstrate a fully fledged backend application built with **Phel** including CRUD operations, authentication, routing, pagination, and more.

We've gone to great lengths to adhere to the **Phel** community styleguides & best practices.

For more information on how to this works with other frontends/backends, head over to the [RealWorld](https://github.com/gothinkster/realworld) repo.


# How it works

Find more information about how to start with phel in [getting started](https://phel-lang.org/documentation/getting-started/).

# Getting started

## Requirements

Phel requires at least PHP 8.0 and Composer.

### Locally

1. Ensure you have PHP >=8.0 (Some help about how to install multiple PHP versions locally on [linux](https://github.com/phpbrew/phpbrew) and [Mac](https://github.com/shivammathur/homebrew-php))
1. Ensure you have [composer](https://getcomposer.org/composer-stable.phar)
1. Clone this repo
1. Install the dependencies | `composer install`

## Phel code

1. Write your phel code in `src/`
2. Execute your web server with
   - `composer run:dev`: it will recompile the code on every request
   - `composer run:prod`: it will run the same compiled code on every request

## Tests

1. Write your phel tests in `tests/`
1. Execute your tests with `composer test`
