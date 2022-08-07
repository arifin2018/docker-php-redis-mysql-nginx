FROM php:8.1.9-fpm
RUN docker-php-ext-install pdo pdo_mysql\
    && rm -rf /var/lib/apt/lists/* 

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip
RUN docker-php-ext-install zip
