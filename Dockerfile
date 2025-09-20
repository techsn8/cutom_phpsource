# Use the official PHP image with Apache
FROM php:8.2-apache

# Install necessary PHP extensions (e.g., mysqli, pdo, pdo_mysql)
# Add other extensions as required by your application
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache modules if needed (e.g., rewrite for clean URLs)
RUN a2enmod rewrite

# Set the working directory inside the container
WORKDIR /var/www/php

# Copy the application code into the container's working directory
# The '.' refers to the current directory where the Dockerfile is located
COPY . /var/www/php

# Expose port 80 for the web server (Apache)
EXPOSE 8088

# The default command for the base image will start Apache
# No explicit CMD or ENTRYPOINT is typically needed for php:apache images
