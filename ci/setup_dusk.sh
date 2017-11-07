#!/bin/sh
    
    set -e
    
    phpenv local 7.1
    
    cp .env.dusk.codeship .env
    
    composer install --no-interaction
    
    ./vendor/laravel/dusk/bin/chromedriver-linux &
    
    php artisan serve > /dev/null 2>&1 &
    sleep 3

    php artisan dusk