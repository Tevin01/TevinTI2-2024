<?php
/*
 * Front Controller de la gestion du livre d'or
 */

 require_once "../view\livreorView.php";

/*
 * Chargement des dépendances
 */
// chargement de configuration
require_once "../config.php";
// chargement du modèle de la table livreor

/*
 * Connexion à la base de données en utilisant PDO
 * Avec un try catch pour gérer les erreurs de connexion
 */

 try {
    $MonPDO = new PDO(DB_DRIVER.":host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT.";charset=".DB_CHARSET, DB_LOGIN, DB_PWD);
 }catch(Exception $e){
    die($e->getMessage());
 }

/*
 * Si le formulaire a été soumis
 */

 if(isset($_POST['complicating'], $_POST['theirMessage']));

    // on appelle la fonction d'insertion dans la DB (addLivreOr())

 

    // si l'insertion a réussi

    // on redirige vers la page actuelle

    // sinon, on affiche un message d'erreur

/*
 * On récupère les messages du livre d'or
 */

// on appelle la fonction de récupération de la DB (getAllLivreOr())

// fermeture de la connexion

// Appel de la vue

include "../view/livreorView.php";