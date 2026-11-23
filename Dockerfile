FROM node:20-alpine AS assets
WORKDIR /app
COPY . .
RUN npm install --legacy-peer-deps && npm run build

FROM php:8.2-apache
RUN apt-get update && apt-get install -y git unzip libzip-dev \
    && docker-php-ext-install pdo_mysql zip \
    && a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Allow document uploads on the contact form (up to 5 files, 10 MB each, 25 MB total)
RUN { \
    echo "upload_max_filesize=10M"; \
    echo "post_max_size=30M"; \
    echo "max_file_uploads=5"; \
    echo "memory_limit=256M"; \
    } > /usr/local/etc/php/conf.d/uploads.ini

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
COPY . .
COPY --from=assets /app/public/build public/build
RUN composer install --no-dev --optimize-autoloader --no-interaction \
    && chown -R www-data:www-data storage bootstrap/cache