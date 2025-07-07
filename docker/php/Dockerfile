FROM php:8.2-apache

# Устанавливаем расширения
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mysqli mbstring exif pcntl bcmath gd zip

# Устанавливаем Composer
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer

# Включаем mod_rewrite
RUN a2enmod rewrite

# Настраиваем Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf \
    && sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Рабочая директория
WORKDIR /var/www/html

# Создаем папку tmp (в корне проекта)
RUN mkdir -p /var/www/html/tmp

# Копируем зависимости для установки
COPY composer.* ./

# Устанавливаем зависимости
RUN if [ -f composer.json ]; then \
        composer install --no-dev --no-scripts --no-interaction; \
        composer dump-autoload --optimize; \
    fi

# Устанавливаем RedBeanPHP
RUN composer require gabordemooij/redbean --no-scripts --no-interaction

# Создаём файл-загрузчик RedBean
RUN mkdir -p /var/www/html/src/libs \
    && echo "<?php require_once 'vendor/autoload.php'; require_once 'vendor/gabordemooij/redbean/rb.php';" > /var/www/html/src/libs/redbean_loader.php

# Копируем весь проект
COPY . .

# Настраиваем права ТОЛЬКО для корневой tmp
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/tmp

# Защищаем папку tmp от доступа извне
RUN echo "Order deny,allow" > /var/www/html/tmp/.htaccess \
    && echo "Deny from all" >> /var/www/html/tmp/.htaccess
