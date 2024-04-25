
**Feuille de route du projet Debuggage (Anais, Samuel, Ruben, Nathan)**


*Projet et objectif*

Le projet est une est une boite à outils en ligne qui permet de réaliser des calculs et des conversions de manière simple et rapide. 
Ce projet étant en version bêta, celui ci contien de nombreux bug et erreur a corriger. De plus certaine fonctionalité sont a implanté.




*1er Etape  Instalation*


La premiere chose a faire est de faire fonctionner le projet pour ce faire devoir realiser les 3 points suivant :

1. Créer une base de données "mytoolbox" et importer le fichier "database.sql" pour avoir les données de base.
2. Renseigner vos variables d'environnement dans le fichier config.php
3. Créer un virtual host pour le site (mytoolbox.local par exemple)




*2eme Etape Bug et resolution*


Pour la deuxieme etape, nous allons recenser les différents bug reperer dans le site. Puis nous allons proceder a leur resolution.

    Liste des bugs recenser :









*3eme Etape Fonctionalité*


A la demande du client des fonctionalités son demandé d'être ajouté au site. voici les différente fonctionalité demandant leur implantation. 


    __Envoie de mail du formulaire de contact __

    Lors de la validation du formulaire de contact un mail est envoyer a l'administrateur.

    //Tache fini réalisé par Anais


     __Choix de la devise__

    Ajouter la possibilité de changer les devises par l'utilisateur dans la page euro dollar.

    //Tache fini réalisé par Nathan : Creation de la fonction convertCurrency + utilisation de l'api https://open.er-api.com/


     __Conversion Litre Mililitre__

    Dans la page espace gestion on retrouve un mail avec la demande d'ajouter un convertisseur littre -> Mililitre.

    //Tache fini réalisé par Nathan : En partant du modele euro -> Dollar Modification de la fonction



    __Validation formulaire Decimal-Hexa__

    Demande que l'envoie des form ce fassent coté serveur, c'est actuellement le cas pour toute les pages excepté la decimal-hexa.

    //Tache en cour




*4eme Etape Librairie*


De nombreuse librairie sont utiliser a la demande du client nous avons deux taches en rapport avec celle-ci

    __Bootstrap en local__

    Actuellement le bootstrap est chargé depuis un CDN, il faudrait le télécharger et de le charger localement.

    //Tache fini réalisé par Nathan : telecharger et importer depuis le footer et remise au propre du code le necessitant

    __Librairie__

    Verifier les librairies présente et les enlever si necessaire.

    //Tache fini réalisé par Nathan : Suppression de Fontawesome et AOS




*5eme tri et mise au propre*


Du code front et back, sont inutiliser dans le projet. L'objectif est d'essayer de faire le tri pour rendre un code propre. 

Liste du nettoyage : 

    Nathan :    Main.js supression de certaine fonction inutiliser
                Suppresion de commentaire




*6eme Compatibilité navigateurs et W3C*

Verification de la compatibilité du navigateur et w3c 



    