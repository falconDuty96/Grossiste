<?php

    include 'db.php' ;

    $id = $_GET['id'] ;
    $sql = "DELETE FROM produit WHERE id='".$id."'" ;
    $conn->query($sql) ;
    header("Location: index.php?action=suppression_produit_success") ;


    

