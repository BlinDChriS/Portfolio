<?php
include "../models/BDD.php";
  //
  if(isset($_POST)){
    
    if(!preg_match('#[a-z0-9-_."]{2,}#',$_POST['projettitre'])){
      echo json_encode("Erreur : Le titre est incorrect.");
    }
    elseif(!preg_match('#[a-z0-9-_."]{2,}#',$_POST['projetclient'])){
      echo json_encode("Erreur : Le nom du client est incorrect.");
    }
    elseif(!preg_match('#[a-z0-9-_."]{2,}#',$_POST['projetcategorie'])){
      echo json_encode("Erreur : Le nom de la catégorie est incorrect.");
    }
    elseif(empty($_POST['projetdate'])){
      echo json_encode("Erreur : problème avec la date");
    }
    elseif(empty($_POST['projetdescription'])){
      echo json_encode("Erreur : La description est vide.");
    }
    elseif(empty($_POST['projetdetails'])){
      echo json_encode("Erreur : La description détailllée est vide.");
    }
    elseif(empty($_POST['projeturl'])){
      echo json_encode("Erreur : URL incorrecte.");
    }
    elseif(empty($_POST['projetminiature'])){
      echo json_encode("Erreur : il n'y a pas de miniature");
    }
    elseif(empty($_POST['projetimage'])){
      echo json_encode("Erreur : il n'y a pas d'image");
    }
    elseif(!preg_match('#[a-z0-9-_."]{2,}#',$_POST['projetalt'])){
      echo json_encode("Erreur : Alt incorrect");
    }
    else{
      $titre = $_POST['projettitre'];
      $client = $_POST['projetclient'];
      $categorie = $_POST['projetcategorie'];
      $date = $_POST['projetdate'];
      $url = $_POST['projeturl'];
      $miniature = $_POST['projetminiature'];
      $image = $_POST['projetimage'];
      $alt = $_POST['projetalt'];
      $description = $_POST['projetdescription'];
      $details = $_POST['projetdetails'];
    
      $req = $pdo->prepare('INSERT INTO projets (titre, categorie, description, dateprojet, client, url, thumbnail, image, alt, details) VALUES("'.$titre.'", "'.$categorie.'", "'.$description.'", "'.$date.'", "'.$client.'", "'.$url.'", "'.$miniature.'", "'.$image.'", "'.$alt.'", "'.$details.'");');
  
      $req->execute();
      $req->fetch();

      echo json_encode("Le projet ".$_POST['projettitre']." est en ligne.");
     
    }
  }
  else{
    echo json_encode("Erreur : Tous les champs doivent etre correctement remplis.");

  }