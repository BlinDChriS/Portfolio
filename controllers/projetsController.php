<?php

function affichageAccueil($twig, $pdo){
    // JE FAIS MA REQUETE SQL
    $projets = $pdo->query('SELECT * FROM projets');
    // JE STOCK LES RESULTATS DANS LA VARIABLE $projets
    echo $twig->render('accueil.html.twig', ['projets' => $projets]);
    }