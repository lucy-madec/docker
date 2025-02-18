# Application Multi-conteneurs avec Docker Compose 🐳

## Description du Projet
Ce projet met en place une application web complète utilisant une architecture multi-conteneurs avec Docker Compose. L'application est composée de quatre services principaux :

- 🗄️ **Base de données MySQL**
- ⚙️ **Backend Node.js**
- 🖥️ **Frontend Nginx**
- 🛠️ **Adminer pour l'administration de la BDD**

## Structure du Projet
```
job06/
├── frontend/         # Configuration et code du frontend
├── backend/          # Configuration et code du backend
├── images/          # Captures d'écran du projet
└── docker-compose.yml
```

## Configuration des Services

### Base de données (MySQL)
- Port: 3306
- Données persistantes via volume Docker
- Credentials sécurisés configurés via variables d'environnement

### Backend (Node.js)
- Image: node:16-alpine
- Port: 3000
- Dépendances: express, mysql2

### Frontend (Nginx)
- Image: nginx:alpine
- Port: 8080
- Sert l'interface utilisateur

### Adminer
- Port: 8081
- Interface web pour la gestion de la base de données

## Réseau
Tous les services sont connectés via un réseau Docker bridge personnalisé pour assurer une communication sécurisée entre les conteneurs.

## Étapes de Progression

### 1. Configuration Initiale ✅
- Création de la structure du projet
- Configuration du docker-compose.yml
- Mise en place des réseaux et volumes
