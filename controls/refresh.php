<?php

    include "db.php" ;

    $unite = $_POST['unite'] ;
    $produit = $_POST['produit'] ;
    $pau = "" ;
    $pvu = "" ;
    $dispo = "" ;
    $res ;
    if($unite != "" && $produit != "") {
        
        if($unite == "1") {
            $res = $conn->query("SELECT pu1,pv1,qte1 FROM produit WHERE libelle='".$produit."' ORDER BY id DESC")->fetchAll(PDO::FETCH_OBJ) ;
            $pau = $res[0]->pu1 ;
            $pvu = $res[0]->pv1 ;
            $dispo = $res[0]->qte1 ;
        }
        else if($unite == "2") {
            $res = $conn->query("SELECT pu2,pv2,qte2 FROM produit WHERE libelle='".$produit."' ORDER BY id DESC")->fetchAll(PDO::FETCH_OBJ) ;
            $pau = $res[0]->pu2 ;
            $pvu = $res[0]->pv2 ;
            $dispo = $res[0]->qte2 ;
        }
        else if($unite == "3") {
            $res = $conn->query("SELECT pu3,pv3,qte3 FROM produit WHERE libelle='".$produit."' ORDER BY id DESC")->fetchAll(PDO::FETCH_OBJ) ;
            $pau = $res[0]->pu3 ;
            $pvu = $res[0]->pv3 ;
            $dispo = $res[0]->qte3 ;
        }
    }
    echo json_encode(["pau" => $pau, "pvu" => $pvu,"dispo" => $dispo]) ;
?>