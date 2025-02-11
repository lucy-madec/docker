<!-- Titre -->
# 🐋Exercices Docker

<!-- Introduction -->
## 📋Description du projet
Ce projet a pour objectif l'apprentissage des commandes de base de Docker à travers l'utilisation de l'image _Welcome to Docker_. Après avoir installé Docker et créé mon compte, j'ai déployé cette image pour tester différentes commandes en suivant mon énoncé. Certaines commandes contenaient des erreurs qu'il a fallu repérer et corriger en identifiant les éléments manquants pour les exécuter correctement.

<!-- Exercices -->
## 🔄️ Vérification de la version de Docker avec  
```docker --version``` 

![docker version](images/1.docker_version.png)

### ⌨️ Test des commandes de base dans le terminal :
* ```docker info```: Affiche toutes les infos du cluster.

![docker info](images/2.docker_info.png)

* ```docker ps```: Affiche les conteneurs actifs.

![docker ps](images/3.docker_ps.png)

* ```docker images```: Affiche toutes les images avec leurs propriétés.

![docker images](images/4.docker_images.png)

* ```docker run``` ❌ Cette commande seule est incorrecte, car il manque le nom de l'image à exécuter.

![docker run](images/5.docker_run_erreur.png)

* ```docker run -d <nomimage>``` ✔️ Cette commande permet de créer et d'exécuter un conteneur à partir d'une image.

![docker run -d nomimage](images/6.docker_run.png)

* ```docker stop``` ❌ Cette commande seule est incorrecte, car il manque l'ID ou le nom du conteneur à arrêter.

![docker stop](images/7.docker_stop_erreur.png)

* ```docker stop <idconteneur>``` ✔️ Cette commande permet d'arrêter un conteneur en précisant son ID ou son nom.

![docker stop idconteneur](images/8.docker_stop.png)

### 📥 Récupération de l'image Docker

* ```docker pull``` ❌ Cette commande seule est incorrecte, car il manque le nom de l'image à récupérer.

![docker pull](images/9.docker_pull_erreur.png)

* ```docker pull <nomimage>``` ✔️ Cette commande permet de télécharger une image depuis Docker Hub.

![docker pull nomimage](images/10.docker_pull.png)

* ```docker images```

![docker images](images/11.docker_images.png)

### 🏗️ Construction du container Docker

* ```docker run -it --rm -p xxxx:80 “nom de l’image”```

![docker images](images/12.construction_container.png)

* Pour que la commande fonctionne, il faut remplacer ```xxxx``` par un moyen d'accéder au container. En mettant ```8088```, on arrive sur la page _Welcome to Docker_ grâce au lien : ```localhost:8088```.

![docker images](images/13.welcome_to_docker.png)