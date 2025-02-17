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

## 🎯 Résultats des Tests

### 📸 État du Conteneur Avant l'Arrêt
![Sortie Docker PS](images/capture_docker_ps.png)

### 🧹 Nettoyage du Conteneur
![Commande Docker Stop](images/capture_docker_stop.png)
![Commande Docker Remove](images/capture_docker_rm.png)

### 🏆 Résultats des Parties
![Résultats du Jeu](images/capture_results.png)

## ✨ Fonctionnalités
- Jeu en temps réel
- Stockage persistant des résultats
- Limitation aux 5 derniers résultats
- Support des résultats X, O et Match nul
