# Use the official PHP 8.2 FPM image
FROM php:8.2-fpm

# Set the working directory inside the container
WORKDIR /var/www/html

# Install system dependencies and PHP extensions required by Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev \
    zip git curl unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Install Composer (for managing PHP dependencies)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy only the necessary files for Composer first (this leverages Docker cache)
COPY composer.json composer.lock /var/www/html/

# Install Composer dependencies (without dev dependencies)
RUN composer install --no-dev --optimize-autoloader

# Now copy the rest of the Laravel project files
COPY . .

# Set up permissions for the storage and bootstrap/cache directories
RUN chmod -R 777 storage bootstrap/cache

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]
