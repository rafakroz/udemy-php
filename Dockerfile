FROM php:8.3-apache

ENV TZ="America/Sao_Paulo"

# Install depencencies
RUN apt-get update \
 && apt-get install -y git less default-mysql-client unzip locales-all gettext

RUN apt-get install -y libzip-dev libpng-dev \
    && docker-php-ext-install gd

RUN apt-get install -y libpq-dev \
 && docker-php-ext-install pdo pdo_mysql

 RUN apt-get install -y libicu-dev \
 && docker-php-ext-install intl

RUN apt-get install -y libzip-dev \
&& docker-php-ext-install zip