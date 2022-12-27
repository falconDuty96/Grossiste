<?php

    include "db.php" ;
    $res = $conn->query("SELECT unite1,unite2,unite3 FROM produit WHERE libelle='".$_POST['produit']."' ORDER BY id DESC")->fetchAll(PDO::FETCH_OBJ) ;
    

    $affichage = "<option value=''>Choisir une unite</option>" ;
    
    if(count($res) > 0) {
        $affichage .= "<option value='1'>Unite 1: ".$res[0]->unite1."</value>" ;

        if($res[0]->unite2 != "-" && $res[0]->unite3 == "-") {
            $affichage .= "<option value='2'>Unite 2: ".$res[0]->unite2."</value>" ;
        }

        if($res[0]->unite != "-" && $res[0]->unite3 != "-") {
            $affichage .= "<option value='2'>Unite 2: ".$res[0]->unite2."</value>" ;
            $affichage .= "<option value='3'>Unite 3: ".$res[0]->unite3."</value>" ;
        }
    }


    echo $affichage ;