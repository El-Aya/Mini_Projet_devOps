FROM php:8.1-apache
# Résoudre le problème du "ServerName"
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
# Copier le code source dans le répertoire web
COPY src/ /var/www/html/
# Donner les permissions nécessaires au répertoire Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html