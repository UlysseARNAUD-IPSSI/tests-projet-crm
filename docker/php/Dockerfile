FROM php:7.3-fpm-alpine

MAINTAINER Ulysse ARNAUD "ulysse.arnaud@liigem.io"

WORKDIR /usr/share/nginx/html

EXPOSE 9000

RUN apt-get install --no-install-recommends --assume-yes --quiet ca-certificates curl git
RUN apt-get install -f -y php-mysql

RUN docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd
RUN docker-php-ext-configure mysqli --with-mysqli=mysqlnd

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo && docker-php-ext-enable pdo
RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql

RUN apt-get update

RUN ln -s resources/css public/css
RUN ln -s resources/js public/js

# RUN echo "extension=pdo_mysql" >> /usr/local/etc/php/php.ini

# CMD ["php-fpm"]
