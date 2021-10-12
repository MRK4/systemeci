# :computer: Système d'Intégration Continue

## :closed_book: Présentation

Le but est de créer un système d'intégration continu effectuant des test unitaires avant de mettre en prod.

## :green_book: Étapes de réalisation

1. Création du repository
2. Mise en place de la VM *(local et Azure)*
3. Installation de NGINX
4. Installation et configuration de Jenkins
5. Installation et configuration de SonarQube
6. Configuration du projet Github pour la CI avec Jenkins et SonarQube

## :blue_book: Mise en place et installation

NGINX est a placer dans " C:\Program Files\ " sinon il ne marchera pas.

Activer IIS sur Windows.

Modifier dans config NGINX le chemin d'accès root jusqu'au site (on a créé un dossier dans " C:\ ... ".

Installer Jenkins, puis SonarQube.

Créer une App github depuis le projet.

Lier le projet Github depuis le pannel Jenkins.

## :ledger: Ressources

Outils utilisés pour le projet:

* [Jenkins](https://www.jenkins.io/)  
* [NGINX](https://www.nginx.com/)  
* [MariaDB](https://mariadb.com/)  
* [SonarQube](https://www.sonarqube.org/)  
