FROM php:8.2-apache

# Copier les fichiers du jeu dans le répertoire web d'Apache
COPY . /var/www/html/

# Créer le volume pour les résultats
VOLUME /var/www/html/game-data

# Déplacer les fichiers qui doivent être dans le volume
RUN mkdir -p /var/www/html/game-data && \
    mv /var/www/html/results.json /var/www/html/game-data/ && \
    mv /var/www/html/save.php /var/www/html/game-data/ && \
    ln -s /var/www/html/game-data/results.json /var/www/html/results.json && \
    ln -s /var/www/html/game-data/save.php /var/www/html/save.php && \
    chown -R www-data:www-data /var/www/html

# Exposer le port 80
EXPOSE 80
