FROM php:8.4-apache

RUN apt-get update \
    && apt-get install -y build-essential curl zlib1g-dev g++ git libicu-dev zip libzip-dev libpng-dev libjpeg-dev libwebp-dev libfreetype6-dev \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

RUN docker-php-ext-configure gd --with-freetype --with-webp --with-jpeg \
    && docker-php-ext-install  gd \
    && docker-php-ext-install exif


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get install -y librabbitmq-dev \
    && pecl install amqp \
    && docker-php-ext-enable amqp

RUN curl -sS https://get.symfony.com/cli/installer | bash
RUN mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

RUN git config --global user.email "thierrydothee@protonmail.com"
RUN git config --global user.name "Thierry Dothee"

WORKDIR /var/www
# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www
# Change current user to www
USER www-data

