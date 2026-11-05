FROM php:8.3-cli
RUN apt-get update && apt-get install -y git unzip libzip-dev \
    && docker-php-ext-install zip
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-scripts --no-autoloader
COPY . .
RUN composer dump-autoload
EXPOSE 8000
CMD cp -n .env.example .env; php artisan key:generate --force; \
    php artisan serve --host=0.0.0.0 --port=8000