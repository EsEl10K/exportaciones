FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    zip \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_mysql mbstring zip intl

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

EXPOSE 8080

CMD ["sh", "-c", "rm -f bootstrap/cache/config.php && php artisan config:clear && php artisan cache:clear && php -S 0.0.0.0:${PORT:-8080} -t public"]