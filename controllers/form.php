<?php
include "../models/BDD.php";
  //
  if(isset($_POST)){
    
    if(!preg_match('#[a-z0-9-_."]{2,}#',$_POST['projettitre'])){
      echo json_encode("Erreur : Entre un titre correct, s'il te plait.");
    }
    elseif(!preg_match('#[a-z0-9-_."]{2,}#',$_POST['projetclient'])){
      echo json_encode("Erreur : Respecte le client, bordel !");
    }
    elseif(!preg_match('#[a-z0-9-_."]{2,}#',$_POST['projetcategorie'])){
      echo json_encode("Erreur : Mais c'est quoi ton site, la?");
    }
    elseif(empty($_POST['projetdate'])){
      echo json_encode("Erreur : t'arrive a rater un input de date, t'es fort, quand meme !");
    }
    elseif(empty($_POST['projetdescription'])){
      echo json_encode("Erreur : La description. T'as fait quelque chose sur ce projet au moins ?");
    }
    elseif(empty($_POST['projetdetails'])){
      echo json_encode("Erreur : Un peu plus de details s'il te plait dans ta description.");
    }
    elseif(!preg_match( '/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i' ,$_POST['projeturl'])){
      echo json_encode("Erreur : l'URL c'est la base d'internet, tu deconnes, la !");
    }
    elseif(empty($_POST['projetminiature'])){
      echo json_encode("Erreur : Mets une miniature, bordel !");
    }
    elseif(empty($_POST['projetimage'])){
      echo json_encode("Erreur : T'as pas mis d'image, il sera beau ton portfolio, tiens !");
    }
    elseif(!preg_match('#[a-z0-9-_."]{2,}#',$_POST['projetalt'])){
      echo json_encode("Erreur : Une description simple et c'est un point de plus pour le referencement naturel");
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

      echo json_encode("Ah, bah la on est bons. Le projet ".$_POST['projettitre']." est en ligne.");
     
    }
  }
  else{
    echo json_encode("Erreur : Tous les champs doivent etre correctement remplis, jeune bipede.");

  }