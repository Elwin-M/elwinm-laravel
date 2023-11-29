# Use the latest PHP 8.3 image
FROM php:8.3

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update \
    && apt-get install -y  \
        libxml2-dev \
        libzip-dev \
        unzip \
        curl \
        nodejs \
        npm \
        mariadb-client \
        nano \
    && docker-php-ext-install pdo zip \
    && apt-get update \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Install Composer dependencies
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the rest of the application codebase
COPY . /var/www/html

RUN composer install && npm install \
    && apt-get update \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Expose port 80 for Laravel application
EXPOSE 80

# Start Laravel's server and run start
CMD php artisan serve --host=0.0.0.0 --port=80 & npm run dev
