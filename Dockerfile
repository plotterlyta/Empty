# Use official PHP with Apache
FROM php:8.2-apache

# Enable mod_rewrite (needed for clean URLs, optional)
RUN a2enmod rewrite

# Copy app source code into Apache's web directory
COPY . /var/www/html/

# Set permissions (optional but recommended)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
