# Utilisation d'une image PHP avec Apache
FROM php:apache

# Copier tous les fichiers dans le conteneur
COPY . /var/www/html/

# Donner les bonnes permissions au dossier de résultats
RUN chmod 777 /var/www/html/results.json

# Exposer le port 80
EXPOSE 80