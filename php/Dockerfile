FROM php:8.1.9-fpm
RUN docker-php-ext-install pdo pdo_mysql\
    && rm -rf /var/lib/apt/lists/* 

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip \
    curl 
RUN docker-php-ext-configure tokenizer
RUN docker-php-ext-install zip bcmath 
RUN apt-get install -y \
        libonig-dev \
    && docker-php-ext-install iconv mbstring
# RUN apt-get install -y \
#         libxml2-dev \
#     && docker-php-ext-install simplexml xml xmlrpc
RUN apt-get install -y \
        libcurl4-openssl-dev \
    && docker-php-ext-install curl
RUN apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd
RUN apt-get install -y \
        libmcrypt-dev \
    && docker-php-ext-install session
RUN docker-php-ext-install json
