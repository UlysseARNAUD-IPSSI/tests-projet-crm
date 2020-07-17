FROM php:7.3-fpm

MAINTAINER Ulysse ARNAUD "ulysse.arnaud@liigem.io"

WORKDIR /usr/share/nginx/html

EXPOSE 9000

RUN docker-php-ext-install pdo_mysql
RUN apt-get update
RUN apt-get install --no-install-recommends --assume-yes --quiet ca-certificates curl git

CMD ["php-fpm"]
