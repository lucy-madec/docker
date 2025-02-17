FROM nginx:alpine

# Installer PHP et les dépendances nécessaires
RUN apk add --no-cache \
    php82 \
    php82-fpm \
    php82-json \
    php82-openssl \
    php82-pdo \
    php82-pdo_mysql \
    php82-session \
    php82-tokenizer

# Configurer PHP-FPM
COPY nginx.conf /etc/nginx/nginx.conf
RUN mkdir -p /run/php/
RUN ln -s /usr/bin/php82 /usr/bin/php

# Copier les fichiers du jeu
COPY . /usr/share/nginx/html/

# Créer le volume pour les résultats
VOLUME /usr/share/nginx/html/game-data

# Déplacer les fichiers qui doivent être dans le volume
RUN mkdir -p /usr/share/nginx/html/game-data && \
    mv /usr/share/nginx/html/results.json /usr/share/nginx/html/game-data/ && \
    mv /usr/share/nginx/html/save.php /usr/share/nginx/html/game-data/ && \
    ln -s /usr/share/nginx/html/game-data/results.json /usr/share/nginx/html/results.json && \
    ln -s /usr/share/nginx/html/game-data/save.php /usr/share/nginx/html/save.php && \
    chown -R nginx:nginx /usr/share/nginx/html

# Exposer le port 80
EXPOSE 80

# Démarrer Nginx et PHP-FPM
CMD php-fpm82 && nginx -g 'daemon off;'
