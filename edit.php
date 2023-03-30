<?php

//inclusion des instances utiles
include ("config.php") ;

include ($dir_common."db.php") ;

//var_dump($_GET) ;
//var_dump($_POST) ;


switch ($_GET["mod"]) { // Gestion du mod d'arrivé en GET
    
    case 'add': // Ajouter une tache en base
    
        
    $sql = "INSERT INTO tache( tache , etat) VALUES ('".$_POST['tache']."' ,'n')" ;
    // Création de la requête sql d'insertion
    //Exécution de la requête
    $mysqli->query($sql) ; 
        # code...
        break;
    case 'del': // Supprimer une tache en base
    
    $sql = "DELETE FROM tache WHERE id=".$_GET["id"] ; // Création de la requête de suppression

    $mysqli->query($sql) ; // Exécution de la requête de suppression
        break;
    case 'upd': // Modifier l'etat d'une tache en base
    
    $sql = "UPDATE tache SET etat='o' WHERE id=".$_GET["id"] ; // Création de la requête de modification

    $mysqli->query($sql) ; // Exécution de la requête de modification  
            # code...
        break;
    
    default:
        # code...
        break;
}

//header("Location : index.php") ;

?>
