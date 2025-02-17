# Job 05 - Jeu de Morpion avec Docker 🎮

## 📝 Description
Ce projet consiste à héberger un jeu de Morpion (Tic Tac Toe) sur le web en utilisant Docker. L'application utilise Nginx comme serveur web et PHP pour la gestion des résultats.

## 📂 Structure du Projet
- `index.html`: Interface principale du jeu
- `save.php`: Gestion de la sauvegarde des résultats
- `results.json`: Stockage des résultats des parties
- `Dockerfile`: Instructions pour la construction de l'image Docker
- `nginx.conf`: Configuration du serveur Nginx

## 🐳 Configuration Docker
- Image de base : Nginx Alpine
- Port exposé : 80 (mappé sur 8080)
- Volume nommé : "game-results" pour le stockage persistant
- PHP-FPM configuré pour le traitement des fichiers PHP

## 🚀 Installation et Exécution

### 🛠️ Construction de l'Image Docker
```bash
docker build -t tictactoe-nginx .
```

### 💾 Création et Vérification du Volume
```bash
docker volume create game-results
docker volume ls
```

### ▶️ Lancement du Conteneur
```bash
docker run -d -p 8080:80 -v game-results:/usr/share/nginx/html/game-data tictactoe-nginx
```

### 📊 Accès aux Résultats
Vous pouvez voir les résultats de plusieurs façons :
1. Via Docker Desktop :
   - Aller dans Volumes > game-results
   - Consulter le contenu de results.json

2. Via le Terminal :
```bash
docker exec <container_id> cat /usr/share/nginx/html/game-data/results.json
```

## 🎯 Étapes de Réalisation

### 1. Construction de l'Image Docker 🛠️
![Construction de l'image](images/1.build.png)

### 2. Vérification des Images 📋
![Liste des images](images/2.images.png)

### 3. Lancement du Conteneur ▶️
![Lancement du conteneur](images/3.run.png)

### 4. Création du Volume 💾
![Création du volume](images/4.creation-volume.png)

### 5. Lancement avec Volume 🔄
![Lancement avec volume](images/5.volume-run.png)

### 6. Vérification du Port 8080 🌐
![Port 8080](images/6.port-8080.png)

### 7. Inspection du Volume 🔍
![Inspection du volume](images/7.inspection-volume.png)

### 8. Vérification des Résultats 📊
![Contenu des résultats](images/8.contenu-resultats.png)

### 9. Construction de l'Image Nginx 🏗️
![Construction Nginx](images/9.nginx-build.png)

### 10. Lancement de Nginx ▶️
![Lancement Nginx](images/10.nginx-run.png)

### 11. Copie des Fichiers 📁
![Copie index](images/11.copie-index.png)

### 12. Configuration du Port 80 🔌
![Port 80](images/12.port-80.png)

### 13. Mappage du Port 8080 🔄
![Port 8080 Nginx](images/13.port-8080-nginx.png)

### 14. Vérification du Volume 💾
![Vérification volume](images/14.volume-check.png)

### 15. Fichiers dans le Volume 📂
![Fichiers volume](images/15.fichiers-volume.png)

### 16. Persistance du Volume 💽
![Persistance volume](images/16.volume-persistence.png)

### 17. Contenu du Conteneur 📦
![Contenu conteneur](images/17.contenu-conteneur.png)

### 18. Inspection du Volume 🔍
![Inspection volume](images/18.inspection-volume.png)

### 19. Contenu du Volume 📂
![Contenu volume](images/19.contenu-volume.png)

### 20. Commandes Terminal 💻
![Commandes terminal](images/20.commandes-terminal.png)

### 21. Volume dans Docker Desktop 🖥️
![Volume Docker Desktop](images/21.docker-desktop-volume.png)

### 22. Conteneur dans Docker Desktop 🐳
![Conteneur Docker Desktop](images/22.docker-desktop-conteneur.png)

### 23. Résultats dans le Terminal 📊
![Résultats terminal](images/23.resultats-terminal.png)

### 24. Résultats dans Docker Desktop 🖥️
![Résultats Docker Desktop](images/24.resultats-desktop.png)

### 25. Résultats des Parties 🎮
![Résultats jeux](images/25.resultats-jeux.png)

### 26. Arrêt du Conteneur ⏹️
![Docker stop](images/26.docker-stop.png)

### 27. Suppression du Conteneur 🗑️
![Docker rm](images/27.docker-rm.png)

### 28. Résultats Finaux 🏆
![Résultats finaux](images/28.resultats-jeux-desktop.png)
