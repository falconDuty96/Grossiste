<?php

    include 'db.php' ;


    $libelle = $_POST['libelle_produit'] ;
    
    $unite1 = $_POST['unite1'] ;
    $qte1 = $_POST['qte1'] ;
    $pu1 = $_POST['pu1'] ;
    $pt1 = $_POST['pt1'] ;
    $pv1 = $_POST['pv1'] ;
    $pvt1 = $_POST['pvt1'] ;

    $unite2 = $_POST['unite2'] ;
    $qte2 = $_POST['qte2'] ;
    $pu2 = $_POST['pu2'] ;
    $pt2 = $_POST['pt2'] ;
    $pv2 = $_POST['pv2'] ;
    $pvt2 = $_POST['pvt2'] ;

    $unite3 = $_POST['unite3'] ;
    $qte3 = $_POST['qte3'] ;
    $pu3 = $_POST['pu3'] ;
    $pt3 = $_POST['pt3'] ;
    $pv3 = $_POST['pv3'] ;
    $pvt3 = $_POST['pvt3'] ;
    $date = date("d-m-Y") ;
    $rapport1_2 = $_POST['rapport1_2'] ;
    $rapport2_3 = $_POST['rapport2_3'] ;

    $res_doublon = $conn->query("SELECT libelle FROM produit WHERE libelle='".$libelle."'")->fetchAll(PDO::FETCH_OBJ) ;
    if(count($res_doublon) == 0) {
        $sql = "INSERT INTO produit(libelle,unite1,unite2,unite3,qte1,qte2,qte3,pu1,pu2,pu3,prixTotal1,prixTotal2,prixTotal3,pv1,pv2,pv3,pvt1,pvt2,pvt3,rapport1_2,rapport2_3,dateentree) VALUES" ;

        if($unite2 == "") {
            $sql .= "('{$libelle}','{$unite1}','-','-','{$qte1}','-','-','{$pu1}','-','-','{$pt1}','-','-','{$pv1}','-','-','{$pvt1}','-','-','-','-','{$date}')" ;
        }

        if($unite3 == "" && $unite2 != "") {
            $sql .= "('{$libelle}','{$unite1}','{$unite2}','-','{$qte1}','{$qte2}','-','{$pu1}','{$pu2}','-','{$pt1}','{$pt2}','-','{$pv1}','{$pv2}','-','{$pvt1}','{$pvt2}','-','{$rapport1_2}','-','{$date}')" ;
        }

        if($unite2 != "" && $unite3 != "") {
            $sql .= "('{$libelle}','{$unite1}','{$unite2}','{$unite3}','{$qte1}','{$qte2}','{$qte3}','{$pu1}','{$pu2}','{$pu3}','{$pt1}','{$pt2}','{$pt3}','{$pv1}','{$pv2}','{$pv3}','{$pvt1}','{$pvt2}','{$pvt3}','{$rapport1_2}','{$rapport2_3}','{$date}')" ;
        }

        $conn->query($sql) ;
    }

    

    


    header("Location: index.php?action=enregistrement_produit_success") ;


    

