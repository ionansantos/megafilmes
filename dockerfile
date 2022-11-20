FROM php:7.4-apache

RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install pdo pdo_mysql

COPY --from=composer/composer /usr/bin/composer /usr/bin/composer

# COPY php.ini /usr/local/etc/php

RUN cd /etc/apache2/mods-available
RUN rm -f /etc/apache2/apache2.conf

COPY apache2.conf /etc/apache2

EXPOSE 80

RUN a2enmod rewrite

CMD ["/usr/sbin/apache2ctl","-DFOREGROUND"]

