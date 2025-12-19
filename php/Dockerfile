FROM php:8.3-fpm
RUN apt-get update && apt-get install -y default-mysql-client && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install mysqli
WORKDIR /var/www/html
