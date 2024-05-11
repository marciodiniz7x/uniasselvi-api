FROM php:apache

Copy . /var/www/html

RUN docker-php-ext-install mysqli pdo pdo_mysql

EXPOSE 80