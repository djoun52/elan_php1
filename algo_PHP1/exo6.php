<a href=" ./index.php" title="index"> index</a>
<br>

<?php





function facture($prix,$quant,$tva){
    $tax = $prix+ ($prix*$tva) ;
    echo  "Prix unitaire de l’article : " . $prix  ."€ <br> Quantité : " . $quant . "<br> Taux de TVA : " . $tva . "<br> Le montant de la facture à régler est de : " . $tax . "€"; 
    return;
}

facture(10,5,0.2);
facture(100,4,0.2);


?>