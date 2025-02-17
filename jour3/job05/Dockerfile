FROM nginx:alpine

# Installer PHP et les extensions nécessaires
RUN apk add --no-cache \
    php82 \
    php82-fpm \
    php82-json \
    php82-openssl \
    php82-pdo \
    php82-pdo_mysql

# Copier la configuration nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Créer le répertoire pour les sockets PHP-FPM
RUN mkdir -p /run/php/

# Créer un lien symbolique pour PHP
RUN ln -s /usr/bin/php82 /usr/bin/php

# Copier les fichiers du jeu
COPY . /usr/share/nginx/html/

# Créer le volume pour les résultats
VOLUME /usr/share/nginx/html/game-data

# Configurer PHP-FPM
RUN mkdir -p /etc/php82/php-fpm.d && \
    { \
        echo '[global]'; \
        echo 'error_log = /var/log/php82/error.log'; \
        echo 'log_level = debug'; \
        echo ''; \
        echo '[www]'; \
        echo 'user = nobody'; \
        echo 'group = nobody'; \
        echo 'listen = 127.0.0.1:9000'; \
        echo 'listen.owner = nobody'; \
        echo 'listen.group = nobody'; \
        echo 'pm = dynamic'; \
        echo 'pm.max_children = 5'; \
        echo 'pm.start_servers = 2'; \
        echo 'pm.min_spare_servers = 1'; \
        echo 'pm.max_spare_servers = 3'; \
        echo 'catch_workers_output = yes'; \
        echo 'php_admin_flag[log_errors] = on'; \
        echo 'php_admin_value[error_log] = /var/log/php82/error.log'; \
    } > /etc/php82/php-fpm.d/www.conf

# Configurer les logs PHP
RUN mkdir -p /var/log/php82 && \
    touch /var/log/php82/error.log && \
    chown -R nobody:nobody /var/log/php82

# Créer le dossier game-data et déplacer les fichiers
RUN mkdir -p /usr/share/nginx/html/game-data && \
    mv /usr/share/nginx/html/results.json /usr/share/nginx/html/game-data/ && \
    mv /usr/share/nginx/html/save.php /usr/share/nginx/html/game-data/ && \
    chown -R nobody:nobody /usr/share/nginx/html/game-data && \
    chmod -R 755 /usr/share/nginx/html/game-data

# Créer les liens symboliques
RUN ln -s /usr/share/nginx/html/game-data/results.json /usr/share/nginx/html/results.json && \
    ln -s /usr/share/nginx/html/game-data/save.php /usr/share/nginx/html/save.php

# Créer un script de démarrage
RUN echo '#!/bin/sh' > /start.sh && \
    echo '/usr/sbin/php-fpm82 --nodaemonize --fpm-config /etc/php82/php-fpm.d/www.conf &' >> /start.sh && \
    echo 'nginx -g "daemon off;"' >> /start.sh && \
    chmod +x /start.sh

# Exposer le port 80
EXPOSE 80

# Démarrer les services
CMD ["/start.sh"]
