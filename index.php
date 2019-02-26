<?php

require("models/twig.php");

$uri = $_SERVER['REQUEST_URI'];
$uriExplode = explode( "/" , $uri);


$id=$uriExplode[2];

session_start();

switch($id){

    case "":
    header('Location: /blindchrisportfolio/home');
    break;

    case "home":
    include "models/bdd.php";
    include "models/twig.php";


// REQUETE SQL POUR CHOPPER TOUS TES PROJETS EN BDD

    echo $twig->render('accueil.html.twig');
    // la bonne ligne qui intègre les projets :
    // echo $twig->render('accueil.html.twig', ['projets' => $projets]);

    break;


    default :
        header('Location: /home');
    exit;       
}