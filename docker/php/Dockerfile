FROM php:8.4-fpm-alpine

RUN apk add --no-cache \
        git \
        unzip \
        bash \
    && docker-php-ext-install pdo_mysql

RUN cp "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini" \
    && echo "date.timezone=Europe/Kyiv" > "$PHP_INI_DIR/conf.d/timezone.ini"

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ARG UID=1000
ARG GID=1000
RUN addgroup -g ${GID} -S app \
    && adduser  -u ${UID} -S app -G app \
    && mkdir -p /var/www/html \
    && chown -R app:app /var/www/html /var/log

WORKDIR /var/www/html
USER app

EXPOSE 9000
CMD ["php-fpm", "-F"]
