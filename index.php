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

    include "controllers/projetsController.php";
    affichageAccueil($twig, $pdo);
    break;

    case "ajoutprojet":
    echo $twig->render('ajoutprojet.html.twig');
    break;
    
    default :
        header('Location: /home');
    exit;       
}