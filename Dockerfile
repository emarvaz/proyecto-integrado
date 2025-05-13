FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    zip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql opcache

RUN a2enmod rewrite

WORKDIR /var/www/html

RUN git config --global --add safe.directory /var/www/html

COPY . .

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install --no-interaction --prefer-dist

EXPOSE 80

COPY docker/apache/default.conf /etc/apache2/sites-available/000-default.conf

CMD ["apache2-foreground"]
