
**Feuille de route du projet Debuggage (Anais, Samuel, Ruben, Nathan)**


*Projet et objectif*

Le projet est une boite à outils en ligne qui permet de réaliser des calculs et des conversions de manière simple et rapide. 
Ce projet étant en version bêta, celui ci contient de nombreux bugs et erreurs à corriger. De plus certaines fonctionalités sont à implanter.




*1er Etape  Installation*


La premiàre étape est de faire fonctionner le projet ; nous allons effectuer les 3 points suivants :

1. Créer une base de données "mytoolbox" et importer le fichier "database.sql" pour avoir les données de base.
2. Renseigner nos variables d'environnement dans le fichier config.php
3. Créer un virtual host pour le site (mytoolbox.local par exemple)




*2eme Etape Bugs et résolution*


Pour la deuxième étape, nous allons recenser les différents bugs repérés sur le site. Puis nous allons procéder à leur résolution.

    Liste des bugs recensés lors de l'utilisation du site :

        Le code Cesar ne fonctionne pas, il ne retourne aucun résultat en chiffrage et déchiffrage
        Impossible d'envoyer un email depuis le formulaire de la page home.php, par la suite résolution du bug d'apostrophe impossible à insérer dans le texte.
        La page Decimal Hexadecimal ne fonctionne pas en négatif
        Les icônes sont absents dans la barre de navigation

    Liste des bugs dans le code :

        Routage de la page home         
        Indentation fichiers js
        ponctuation manquante dans le code javascript de certaines pages (code cesar)
        .htaccess moncheminici bug de routage




*3eme Etape Fonctionalité*


A la demande du client des fonctionalités son demandées d'être ajouté au site. voici les différente fonctionalité demandant leur implantation. 


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

    Demande que l'envoie des formulaire ce fassent coté serveur, c'est actuellement le cas pour toute les pages excepté la decimal-hexa.

    //Tache fini réalisé par Anais :




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


Du code front et back, est inutilisé dans le projet. L'objectif est d'essayer de faire le tri pour obtenir un code propre. 

Liste du nettoyage : 

    Nathan :    Main.js supression de certaines fonctions inutilisés
                Suppression de commentaires




*7eme Compatibilité navigateurs et W3C*

Vérification de la compatibilité du navigateur et w3c : les balises body et main n'étaient pas fermées dans le footer.php.
Le formulaire de la home.php étant vide dans l'attribut action, cela ne correspondait pas au standard du W3C

    //W3C en cours réalisé par Anais
    //Compatibilité du navigateur en cour réalisé par Nathan : Firefox, Chrome, Opéra, Explorer

    