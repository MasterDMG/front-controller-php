FROM php:apache
MAINTAINER Paweł Poloczek

# install php extensions
RUN apt-get update -y && apt-get install -y libpng-dev libfreetype6-dev libjpeg62-turbo-dev nano libzip-dev
RUN docker-php-ext-install zip pdo pdo_mysql mysqli
# RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
# RUN docker-php-ext-install -j$(nproc) gd

# install git for cloning by composer
# RUN apt-get install -y git
# RUN git config --global user.email "pawel@poloczek.me"
# RUN git config --global user.name "Paweł Poloczek"

# install composer
# RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
# RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
# RUN php composer-setup.php --install-dir=/bin --filename=composer
# RUN php -r "unlink('composer-setup.php');"
