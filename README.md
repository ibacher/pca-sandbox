# PCA Sandbox Application

The PCA Sandbox Application is a simple application built on Laravel 9 with a Vue 3
single-page front-end. This implementation is intended as a lab for implementing
features in a Laravel application.

The scope of the functionality is quite limited: a small number of screens and forms
designed around the work of collecting admit, discharge and transfer information
manually entered by users of the application.

## Getting Started

Here are the steps to get started with this project quickly:

1. Checkout the source code from GitHub
2. `cd` into the project directory
3. Run `./vendor/bin/sail up -d` to fire-up the development environment
4. Run `./vendor/bin/sail composer install` to install the necessary PHP libraries
5. Run `./vendor/bin/sail npm ci` to install the frontend dependencies
6. Create a `.env` file from the `.env.example` (e.g. `cp .env.example .env`)
7. Run `./vendor/bin/sail artisan key:generate` to generate an `APP_KEY` for your instance
8. Run `./vendor/bin/sail artisan migrate` to set up the database
9. Run `./vendor/bin/sail artisan db:seed` to seed the database with some example data
10. Run `./vendor/bin/sail artisan passport:install` to create the Passport client
11. Run `./vendor/bin/sail npm run hot` to start up the frontend in hot-reloading mode
12. Browse to http://localhost and get started!

## Packages Used

In addition to Laravel's "core" the following Laravel-specific packages are used:

1. [Sail](https://laravel.com/docs/9.x/sail) - Docker-based dev environment for Laravel
2. [Passport](https://laravel.com/docs/9.x/passport) - Configured to use "password" token grants
3. [InertiaJS](https://inertiajs.com/) - Provides a SPA environment integrated with Laravel's backend
4. [Mix](https://laravel-mix.com/) - Used for building the frontend components
