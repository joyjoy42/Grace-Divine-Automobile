#!/bin/bash

# Ensure database directory exists
mkdir -p /var/www/html/database

# Ensure SQLite file exists and is writable
if [ ! -f /var/www/html/database/database.sqlite ]; then
    touch /var/www/html/database/database.sqlite
fi
chown www-data:www-data /var/www/html/database/database.sqlite
chmod 664 /var/www/html/database/database.sqlite

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
