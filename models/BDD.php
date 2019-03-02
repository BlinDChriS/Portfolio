<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=blindchris;charset=utf8mb4', 'root', '');
    // $pdo = new PDO('mysql:host=promo-27.codeur.online;dbname=christiana_portfolio;charset=utf8', 'christiana', '4XDpwZZV2h24lQ==');
}
catch(Exception $e){
die('Erreur : '.$e->getMessage());
}

?>