# Use the official PHP image with Apache pre-installed
FROM php:8.2-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the project files into the container
COPY . /var/www/html

# Install required PHP extensions (add your specific requirements here)
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    zip unzip \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Enable Apache mod_rewrite (commonly needed for PHP projects)
RUN a2enmod rewrite

# Set proper permissions for the web server
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose the default HTTP port
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]