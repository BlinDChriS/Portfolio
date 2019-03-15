<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=blindchris;charset=utf8mb4', 'root', '');
    // $pdo = new PDO('mysql:host=promo-27.codeur.online;dbname=christiana_portfolio;charset=utf8', 'christiana', '4XDpwZZV2h24lQ==');
    // $pdo = new PDO('mysql:host=blindchrhfchris.mysql.db;dbname=blindchrhfchris;charset=utf8', 'blindchrhfchris', 'LleCtub3l2i7n5dB');
}
catch(Exception $e){
die('Erreur : '.$e->getMessage());
}

?>