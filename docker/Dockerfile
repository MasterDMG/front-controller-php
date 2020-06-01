FROM php:apache

# install php extensions
RUN apt-get update -y && apt-get install -y libpng-dev libfreetype6-dev libjpeg62-turbo-dev nano libzip-dev
RUN docker-php-ext-install zip pdo pdo_mysql mysqli

RUN a2enmod rewrite