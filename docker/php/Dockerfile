FROM php:7.3-fpm

MAINTAINER Ulysse ARNAUD "ulysse.arnaud@liigem.io"

WORKDIR /usr/share/nginx/html

EXPOSE 9000

RUN docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd
RUN docker-php-ext-configure mysqli --with-mysqli=mysqlnd
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN docker-php-ext-enable pdo pdo_mysql mysqli
RUN apt-get update
RUN apt-get install --no-install-recommends --assume-yes --quiet ca-certificates curl git

RUN ln -s resources/css public/css
RUN ln -s resources/js public/js

# CMD ["php-fpm"]
