FROM php:7.4-fpm
 
# Arguments defined in docker-compose.yml
ARG user
ARG uid
 
# Install system dependencies
RUN apt-get update && apt-get install -y \
   git \
   curl \
   libpng-dev \
   libonig-dev \
   libxml2-dev \
   zip \
   unzip
 
# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
 
# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd
 
# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
 
WORKDIR /var/www
COPY . /var/www

# Copy existing application directory permissions
# COPY --chown=www:www . /var/www

# # Change current user to www
# USER www
RUN composer install
 
CMD php artisan serve --host=0.0.0.0
EXPOSE 8000