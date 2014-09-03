#!/bin/bash

cd /home/Sites/laravel.tw/sami

rm -rf /home/Sites/laravel.tw/sami/build
rm -rf /home/Sites/laravel.tw/sami/cache

# Run API Docs
git clone https://github.com/laravel/framework.git /home/Sites/laravel.tw/sami/laravel

php /home/Sites/laravel.tw/sami/sami.php update /home/Sites/laravel.tw/sami/config.php

cp -r /home/Sites/laravel.tw/sami/build/* /home/Sites/laravel.tw/public/api

rm -rf /home/Sites/laravel.tw/sami/build
rm -rf /home/Sites/laravel.tw/sami/cache

# Cleanup
rm -rf /home/Sites/laravel.tw/sami/laravel
