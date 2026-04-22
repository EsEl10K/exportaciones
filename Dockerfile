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

CMD ["sh", "-c", "mkdir -p /app/storage/framework/views /app/storage/framework/cache /app/storage/framework/sessions /app/storage/logs /app/bootstrap/cache && chmod -R 775 /app/storage /app/bootstrap/cache && printf 'APP_NAME=%s\nAPP_ENV=%s\nAPP_KEY=%s\nAPP_DEBUG=%s\nAPP_URL=%s\nDB_CONNECTION=%s\nDB_HOST=%s\nDB_PORT=%s\nDB_DATABASE=%s\nDB_USERNAME=%s\nDB_PASSWORD=%s\nCACHE_DRIVER=%s\nFILESYSTEM_DISK=%s\nLOG_CHANNEL=%s\nLOG_LEVEL=%s\nQUEUE_CONNECTION=%s\nSESSION_DRIVER=%s\nSESSION_LIFETIME=%s\nVIEW_COMPILED_PATH=%s\n' \"$APP_NAME\" \"$APP_ENV\" \"$APP_KEY\" \"$APP_DEBUG\" \"$APP_URL\" \"$DB_CONNECTION\" \"$DB_HOST\" \"$DB_PORT\" \"$DB_DATABASE\" \"$DB_USERNAME\" \"$DB_PASSWORD\" \"$CACHE_DRIVER\" \"$FILESYSTEM_DISK\" \"$LOG_CHANNEL\" \"$LOG_LEVEL\" \"$QUEUE_CONNECTION\" \"$SESSION_DRIVER\" \"$SESSION_LIFETIME\" \"$VIEW_COMPILED_PATH\" > .env && rm -f bootstrap/cache/config.php && php artisan config:clear && php artisan cache:clear && php -S 0.0.0.0:${PORT:-8080} -t public"]