$(document).ready(function() {
    const URL = 'http://localhost/Grossiste/' ;
    var anim = setInterval(function() {
        $.ajax({
            url: URL+'index.php?action=refresh' ,
            type: "post" ,
            dataType: "json" ,
            data: {
                "unite": $("#choixUniteVente").val() ,
                "produit": $("#choixProduitVente").val() ,
            }
        })
        .done(function(data) {
            $("#pau").val(data.pau) ;
            $("#pvu").val(data.pvu) ;
            $("#dispo").val(data.dispo) ;
        })
        
    }, 200) ;

    $("#choixProduitVente").change(function() {
        $.ajax({
            url: URL+'index.php?action=take_unity' ,
            type: "post" ,
            data: {
                "produit": $(this).val() ,
            }
        })
        .done(function(data) {
            $("#choixUniteVente").html(data) ;
        })
    })


    var animPrice = setInterval(function() {
        if($("#qte").val() == "" || $("#pvu").val() == "") {
            $("#prixT").val(0) ;
        }
        else {
            $("#prixT").val(Number($("#qte").val()) * Number($("#pvu").val())) ;
        }
        
    },200) ;

}) ;