# FROM php
# COPY ./index.php ./
# EXPOSE 80
# CMD ["php", "-S", "0.0.0.0:80"]

FROM php:7.4-apache

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY start-apache /usr/local/bin
RUN a2enmod rewrite

# Copy application source
COPY  /var/www/
RUN chown -R www-data:www-data /var/www

CMD ["start-apache"]