#!/bin/sh
    
    set -e
    
    phpenv local 7.1

    mysql -e 'create database ucss_tests;'

    composer install --no-interaction -o --optimize-autoloader
    
    cp .env.codeship .env
    
    cp .env.dusk.codeship .env
    
    php artisan migrate --force
    php artisan db:seed

    vendor/bin/phpunit