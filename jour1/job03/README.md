# 🐋 Docker Super Mario - Déploiement et Gestion

## 📋 Description du projet
Ce projet consiste à déployer et gérer le jeu Super Mario en utilisant Docker. Exploration de différentes méthodes de déploiement, de gestion des conteneurs et des images Docker, en utilisant à la fois la ligne de commande et Docker Compose.

## 🎮 Déploiement du jeu

### 1. Recherche de l'image
```bash
docker search pengbai/supermario
```
Cette commande nous permet de trouver l'image correcte : `pengbai/docker-supermario`

![Recherche de l'image Mario](images/1.recherche-image-mario.png)

### 2. Récupération de l'image
```bash
docker pull pengbai/docker-supermario
```

![Récupération de l'image Mario](images/2.recuperation-image-mario.png)

![Placement de l'image Mario](images/3.placement-image-mario.png)

### 3. Méthodes de lancement

#### Méthode 1 : Via Docker CLI
```bash
docker run -d -p 8600:8080 pengbai/docker-supermario
```

#### Méthode 2 : Via Docker Compose
```yaml
version: '3'
services:
  supermario:
    image: pengbai/docker-supermario
    ports:
      - "8600:8080"
    container_name: supermario
```

![Deux méthodes de lancement](images/4.deux-méthodes-lancer-container.png)

![Lancement dans Docker](images/5.lancement-dans-docker.png)

![Changement de port](images/6.changement-port.png)

![Lancement Mario](images/7.lancement-mario.png)

![Début du jeu Mario](images/8.debut-jeu-mario.png)

![Autre carte Mario](images/9.autre-carte-mario.png)

## 🔄 Gestion des conteneurs

### Trouver l'ID d'un conteneur
Deux méthodes possibles :
1. ```docker ps```
2. ```docker container ls```

### Arrêter un conteneur
```bash
docker stop <ID_ou_nom_du_container>
```

![Docker stop](images/10.docker-stop.png)

### Supprimer un conteneur
Deux méthodes possibles :
1. ```docker rm [-f] <ID_ou_nom_du_container>```
2. ```docker container rm [-f] <ID_ou_nom_du_container>```

Note : L'option `-f` force la suppression d'un conteneur en cours d'exécution.

![Supprimer container](images/11.supprimer-container.png)

## 🗑️ Gestion des images

### Supprimer une image
Deux méthodes possibles :
1. ```docker rmi pengbai/docker-supermario```
2. ```docker image rm pengbai/docker-supermario```

![Supprimer image](images/12.supprimer-image.png)
