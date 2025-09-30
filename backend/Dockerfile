FROM php:8.2-cli

# Cài composer và các extension PHP cần thiết
RUN apt-get update && apt-get install -y unzip git libpq-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
