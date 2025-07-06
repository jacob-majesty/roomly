FROM php:8.2-fpm-alpine

WORKDIR /var/www

RUN apk update && apk add \
    build-base \
    libzip-dev \
    zip \
    unzip \
    mysql-client \
    && docker-php-ext-install pdo pdo_mysql zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala dependências como root
COPY . .
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Depois muda para usuário não-root
RUN addgroup -g 1000 -S www && \
    adduser -u 1000 -S www -G www

RUN chown -R www:www /var/www
USER www

EXPOSE 9000