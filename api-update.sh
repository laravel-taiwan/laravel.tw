#!/bin/bash

cd /var/www/laravel.com/sami

rm -rf /var/www/laravel.com/sami/build
rm -rf /var/www/laravel.com/sami/cache

# Run API Docs
git clone https://github.com/laravel/framework.git /var/www/laravel.com/sami/laravel

php /var/www/laravel.com/sami/sami.php update /var/www/laravel.com/sami/config.php

cp -r /var/www/laravel.com/sami/build/* /var/www/laravel.com/public/api

rm -rf /var/www/laravel.com/sami/build
rm -rf /var/www/laravel.com/sami/cache

# Cleanup
rm -rf /var/www/laravel.com/sami/laravel