
**Feuille de route du projet Debuggage (Anais, Samuel, Ruben, Nathan)**


*Projet et objectif*

Le projet est une boite à outils en ligne qui permet de réaliser des calculs et des conversions de manière simple et rapide. 
Ce projet étant en version bêta, celui-ci contient de nombreux bugs et erreurs à corriger. De plus certaines fonctionnalités sont à implanter.




*1er Etape Installation*


La première étape est de faire fonctionner le projet via les 3 points suivants :

1. Créer une base de données "mytoolbox" et importer le fichier "database.sql" pour avoir les données de base.
2. Renseigner vos variables d'environnement dans le fichier config.php          
3. Créer un virtual host pour le site (mytoolbox.local par exemple)             //Tache fini réalisé par Sam
          




*2eme Etape Bug et résolution*


Pour la deuxième étape, nous allons recenser les différents bug repérés dans le site. Puis nous allons procéder à leur résolution.

    Liste des bugs recensés à l'utilisation :

        Code césar qui ne fonctionne pas
        Bug envoi d'email, apostrophe manquante
        Code césar ne fonctionne pas en négatif
        Icônes manquants

    Liste des bugs recensés dans le code :

        Routage de la page home         
        Indentation fichiers js
        .htaccess moncheminici bug de routage

//Correction des bugs par Sam, Anais, Nathan


*3eme Etape Fonctionnalités*


A la demande du client des fonctionalités ont été ajoutés au site. Voici les différentes fonctionalités :

    __Envoi de mail du formulaire de contact __

    Lors de la validation du formulaire de contact un mail est envoyé a l'administrateur. Configuration de l'envoi d'email sur Laragon

    //Tâche fini réalisé par Anais


     __Choix de la devise__

    Ajouter la possibilité de changer les devises par l'utilisateur dans la page euro dollar.

    //Tâche fini réalisé par Nathan : Création de la fonction convertCurrency + utilisation de l'api https://open.er-api.com/


     __Conversion Litre Mililitre__

    Dans la page espace gestion on retrouve un mail avec la demande d'ajouter un convertisseur litre -> Mililitre.

    //Tâche réalisé par Nathan : En partant du modele euro -> Dollar Modification de la fonction



    __Validation formulaire Decimal-Hexa__

    Demande que l'envoi des formulaires se fasse coté serveur, c'était le cas pour toute les pages excepté la decimal-hexa.

    //Tâche réalisé par Anais :




*4eme Etape Librairie*


De nombreuse librairie sont utiliser a la demande du client nous avons deux taches en rapport avec celle-ci

    __Bootstrap en local__

    Actuellement le bootstrap est chargé depuis un CDN, il faudrait le télécharger et de le charger localement.

    //Tache fini réalisé par Nathan : telecharger et importer depuis le footer et remise au propre du code le necessitant

    __Librairie__

    Verifier les librairies présente et les enlever si necessaire.

    //Tache fini réalisé par Nathan : Suppression de Fontawesome et AOS




*5eme Etape Variable d'environnement*


Enregistrement des variables d'environnement dans un fichier .env

    //Tache en cour réalisé par Sam



*6eme tri et mise au propre*


Du code front et back, sont inutiliser dans le projet. L'objectif est d'essayer de faire le tri pour rendre un code propre. 

Liste du nettoyage : 

    Ruben :     Correction surplus code et erreur

    Nathan :    Main.js supression de certaine fonction inutiliser
                Suppresion de commentaire




*7eme Compatibilité navigateurs et W3C*

Vérification de la compatibilité du navigateur et w3c 

    //W3C réalisé par Anais
    //Compatibilité du navigateur en cour réalisé par Nathan : Firefox, Chrome, Opéra, Explorer

    