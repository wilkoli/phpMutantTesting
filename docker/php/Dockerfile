FROM php:8-apache

RUN apt-get update && apt-get install -y libpq-dev git zip unzip libicu-dev \
    && docker-php-source extract \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-source delete \
    && docker-php-ext-install -j$(nproc) pdo_pgsql intl bcmath \
    && docker-php-ext-install opcache \
    && docker-php-ext-enable opcache \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-enable intl

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

COPY default.conf /etc/apache2/sites-available/default.conf

RUN chown -R www-data:www-data /var/www
RUN usermod -u 1000 www-data

USER www-data
EXPOSE 80




