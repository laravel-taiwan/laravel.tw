#!/bin/bash

cd /home/Sites/laravel.tw/build/sami

rm -rf /home/Sites/laravel.tw/build/sami/build
rm -rf /home/Sites/laravel.tw/build/sami/cache

# Run API Docs
git clone https://github.com/laravel/framework.git /home/Sites/laravel.tw/build/sami/laravel

php /home/Sites/laravel.tw/vendor/bin/sami.php update /home/Sites/laravel.tw/build/sami/sami.php

cp -r /home/Sites/laravel.tw/build/sami/build/* /home/Sites/laravel.tw/public/api

rm -rf /home/Sites/laravel.tw/build/sami/build
rm -rf /home/Sites/laravel.tw/build/sami/cache

# Cleanup
rm -rf /home/Sites/laravel.tw/build/sami/laravel
