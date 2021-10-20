# :computer: Système d'Intégration Continue

## :closed_book: Présentation

À chaque commit sur ce projet github, le code est testé grâce à Jenkins *(et des plugins)* à l'aide d'une VM installée sur un serveur Azure, puis si les tests *(tests unitaires et tests d'intégration)* sont concluants, alors le nouveau code sera mis en production.

![schéma d'intégration continue](https://github.com/MRK4/systemeci/blob/main/Image.png?raw=true)

## :green_book: Étapes de réalisation

1. Création du repository
2. Mise en place de la VM *(local et Azure)*
3. Installation de NGINX
4. Installation et configuration de Jenkins
5. Installation et configuration de SonarQube
6. Configuration du projet Github pour la CI avec Jenkins et SonarQube

## :blue_book: Mise en place et installation

NGINX est à placer dans " C:\Program Files\ " sinon il ne fonctionnera pas.

Activer IIS sur Windows [*(voir ici)*](https://enterprise.arcgis.com/fr/web-adaptor/10.3/install/iis/enable-iis-7-components-server.htm).

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

:coffee: *Projet réalisé par Alexis Lefoul, Aurélien Gauthier et Clément Poudrée*
