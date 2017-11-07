#!/bin/sh
    
    set -e
    
    phpenv local 7.1

    mysql -e 'create database ucss_tests;'

    cp .env.codeship .env
    
    composer install --no-interaction -o --optimize-autoloader
        
    php artisan migrate --force
    php artisan db:seed

    vendor/bin/phpunit