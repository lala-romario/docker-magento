    FROM php:8.3-fpm

    RUN apt-get update && apt-get install -y \
        git \
        unzip \
        zip \
        curl \
        libicu-dev \
        libxml2-dev \
        libzip-dev \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        libxslt1-dev \
        libonig-dev

    RUN docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg

    RUN docker-php-ext-install \
        pdo_mysql \
        mysqli \
        intl \
        zip \
        gd \
        soap \
        bcmath \
        xsl \
        sockets \
        ftp

    COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

    RUN echo "memory_limit=2G" > /usr/local/etc/php/conf.d/memory.ini

    RUN chown -R www-data:www-data /var/www/html/src \
    && chmod -R 775 /var/www/html/src/pub \
    && chmod -R 775 /var/www/html/src/var \
    && chmod -R 775 /var/www/html/src/generated
    
    WORKDIR /var/www/html