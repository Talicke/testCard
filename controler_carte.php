<?php
include "card.html";

$bdd = new PDO('mysql:host=localhost;dbname=jeffPizza', 'root','', 
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

function showAllproduit($bdd){
    try{
        $req = $bdd->prepare('SELECT * FROM produits');
        $req->execute(array());
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    catch(Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}
$produits = showAllproduit($bdd);

foreach($produits as $value){
    // var_dump($value);
    $card = '<div class=\'card m-5\'><div id=\'click-card'.$value->id_prod.'\'><img src=\''.$value->img_prod.'\' class=\'card-img-top\' alt=\'...\'></div><div id=\'card-body'.$value->id_prod.'\'><h5 class=\'card-title\'>'.$value->nom_prod.'</h5></div></div>';

    $versoCardHaut = '<img src=\''.$value->img_prod.'\' class=\'card-img-top\' alt=\'...\'>';
    $versoCardBas = '<h5 class=\'card-title\'>'.$value->nom_prod.'</h5>';
    $rectoCardHaut = '<h5>Ingredient :</h5><p>'.$value->ingredient_prod.'</p>';
    $rectoCardBas = '<form action=\'\'><select name=\'taille\' id=\'taille-pizza\' class=\'dropdown\'><option value=\'16\'>16 cm</option><option value=\'24\'>24 cm</option><option value=\'32\'>32 cm</option></select></br><select name=\'pate\' id=\'pate-pizza\' class=\'dropdown\'><option value=\'fine\'>Fine</option><option value=\'moyenne\'>Moyenne</option><option value=\'epaisse\'>Epaisse</option></select><button type=\'submit\' class=\'submit-button\'>Ajouter au panier</button></form>';
    
    echo $card;
    echo '<script>
            console.log("hello")
            let hautCard'.$value->id_prod.' = document.querySelector("#click-card'.$value->id_prod.'");
            let basCard'.$value->id_prod.' = document.querySelector("#card-body'.$value->id_prod.'");
            switchCard(hautCard'.$value->id_prod.', basCard'.$value->id_prod.', "'.$versoCardHaut.'", "'.$versoCardBas.'","'.$rectoCardHaut.'", "'.$rectoCardBas.'");
        </script>';
}  



?>