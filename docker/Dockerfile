FROM php:apache

# install php extensions
RUN apt-get update -y && apt-get install -y libpng-dev libfreetype6-dev libjpeg62-turbo-dev nano libzip-dev
RUN docker-php-ext-install zip pdo pdo_mysql mysqli

COPY ./apache/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite