FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN echo "deb https://archive.debian.org/debian stretch main" > /etc/apt/sources.list
RUN apt-get update && apt-get upgrade -y