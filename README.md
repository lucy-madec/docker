<!-- Titre -->
# 🐋Exercices Docker

<!-- Introduction -->
## 📋Description du projet
Ce projet a pour objectif l'apprentissage des commandes de base de Docker à travers l'utilisation de l'image _Welcome to Docker_. Après avoir installé Docker et créé mon compte, j'ai déployé cette image pour tester différentes commandes en suivant mon énoncé. Certaines commandes contenaient des erreurs qu'il a fallu repérer et corriger en identifiant les éléments manquants pour les exécuter correctement.

<!-- Exercices -->
## 🔄️ Vérification de la version de Docker avec  
```docker --version```

![docker version](images/1.docker_version.png)

### ⌨️Test des commandes de base dans le terminal :
* ```docker info```

![docker info](images/2.docker_info.png)

* ```docker ps```

![docker ps](images/3.docker_ps.png)

* ```docker images```

![docker images](images/4.docker_images.png)

* ```docker run``` qui est une <span style="color: red;">erreur</span> ❌

![docker run](images/5.docker_run_erreur.png)

* ```docker run -d <nomimage>``` qui est la bonne commande pour créer un conteneur avec l’image dedans ✔️

![docker run -d nominage](images/6.docker_run.png)

* ```docker stop``` qui est une <span style="color: red;">erreur</span> ❌

![docker stop](images/7.docker_stop_erreur.png)

* ```docker stop <idconteneur>``` qui est la bonne commande pour arrêter Docker ✔️

![docker stop idconteneur](images/8.docker_stop.png)