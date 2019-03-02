<?php

require("models/twig.php");

$uri = $_SERVER['REQUEST_URI'];
$uriExplode = explode( "/" , $uri);

$id=$uriExplode[2];

switch($id){

    case "":
    header('Location: /blindchrisportfolio/home');
    break;

    case "home":
    include "models/BDD.php";
    include "models/twig.php";


// REQUETE SQL POUR CHOPPER TOUS TES PROJETS EN BDD
// ... Pas encore ...

    echo $twig->render('accueil.html.twig');
    // la bonne ligne qui intègre les projets :
    // echo $twig->render('accueil.html.twig', ['projets' => $projets]);

    break;

    case "ajoutprojet":
    echo $twig->render('ajoutprojet.html.twig');
    break;
    


    default :
        header('Location: /home');
    exit;       
}