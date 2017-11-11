#!/bin/sh
    
    set -e
    
    phpenv local 7.1
    
    cp .env.dusk.codeship .env
    
    mysql -e 'create database dusk_tests;'
    
    composer install --prefer-dist --no-interaction
    php artisan key:generate
    
    ./vendor/laravel/dusk/bin/chromedriver-linux &
    
    php artisan serve > /dev/null 2>&1 &
    sleep 3

    php artisan dusk