FROM php:8.2-apache

# Copier les fichiers du jeu dans le répertoire web d'Apache
COPY . /var/www/html/

# Donner les permissions appropriées pour le fichier results.json
RUN touch /var/www/html/results.json && \
    chown -R www-data:www-data /var/www/html && \
    chmod 664 /var/www/html/results.json

# Exposer le port 80
EXPOSE 80
