FROM php:8.3-apache

RUN apt-get -y update \
&& apt-get -y install apache2-utils \
&& apt-get -y install git \
&& apt-get -y install zip

RUN a2enmod rewrite

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer