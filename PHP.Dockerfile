FROM php:fpm

RUN apt-get update && \
    apt-get install -y \
    zlib1g-dev libzip-dev libonig-dev libicu-dev unzip

RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN docker-php-ext-install mbstring intl
RUN docker-php-ext-install zip

# And clean up the image
RUN rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer