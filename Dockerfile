# Stage 1: Build Frontend Assets
FROM node:20-bullseye as frontend-build
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2: PHP Runtime
FROM php:8.2-apache-bullseye

# Set environment variables
ENV COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_MEMORY_LIMIT=-1 \
    APACHE_DOCUMENT_ROOT=/var/www/html/public

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libsqlite3-dev \
    libpq-dev \
    libzip-dev \
    libicu-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    dos2unix \
    zip \
    unzip \
    git \
    curl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_sqlite pdo_pgsql bcmath intl mbstring gd zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set Apache DocumentRoot to Laravel's public folder
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application files (Copying all at once to ensure autoloader has all files)
COPY . .

# Copy built assets from frontend stage
COPY --from=frontend-build /app/public/build ./public/build

# Install production PHP dependencies
# Adding --no-progress to reduce log noise and memory usage
RUN composer install --no-dev --no-scripts --optimize-autoloader --ignore-platform-reqs --no-progress --verbose

# Set permissions and fix line endings for entrypoint
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN dos2unix /var/www/html/docker-entrypoint.sh && chmod +x /var/www/html/docker-entrypoint.sh

# Expose port
EXPOSE 80

# Move entrypoint to bin
RUN mv /var/www/html/docker-entrypoint.sh /usr/local/bin/

ENTRYPOINT ["docker-entrypoint.sh"]
