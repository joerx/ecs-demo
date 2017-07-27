FROM php:7-fpm-alpine

COPY . /var/www/html/

VOLUME /var/www/html/public
