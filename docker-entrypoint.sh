#!/bin/bash

# Ensure storage and bootstrap directories are writable
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache


# Cache configuration and routes for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run package discovery
php artisan package:discover --ansi


# Run migrations
php artisan migrate --force

# Start Apache in the foreground
exec apache2-foreground
