#!/bin/sh
    
    set -e
# Set PHP version
phpenv local 7.1

# Remove XDebug
rm -f /home/rof/.phpenv/versions/$(phpenv version-name)/etc/conf.d/xdebug.ini

# Increase memory
sed -i'' 's/^memory_limit=.*/memory_limit = 512m/g' ${HOME}/.phpenv/versions/$(phpenv version-name)/etc/php.ini

mysql -e 'create database ucss_tests;'

cp .env.codeship .env

# Install dependencies through Composer
composer install --prefer-source --no-interaction
php artisan key:generate

# Seed database
php artisan migrate:refresh --seed

# Start the PHP server
php artisan serve >/dev/null 2>&1 &

vendor/bin/phpunit