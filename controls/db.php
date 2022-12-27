<?php

    $conn = null ;
    try {
        $conn = new PDO("mysql:host=localhost;dbname=grossiste","root","") ;
    }
    catch(PDOException $ex) {
        echo $ex; 
        die() ;
    }