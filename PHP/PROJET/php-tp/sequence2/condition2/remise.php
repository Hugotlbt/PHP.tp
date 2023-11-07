<?php
$prix=readline("saisir un prix: " );
if ($prix<1000){
    $modu= $prix<=>round($prix/1.05,2);
    echo "la remise est de ",$modu," €";
    echo PHP_EOL;
    echo "le montant total de l'article est ",round($prix/1.05,2),"€";
}elseif ($prix>=1000 && $prix<5000){
    $modu= fmod(1.10, $prix);
    echo "la remise est de ",$modu," €";
    echo PHP_EOL;
    echo "le montant total de l'article est ",round($prix/1.10,2),"€";
}else{;
    $modu= fmod(1.20, $prix);
    echo "la remise est de ",$modu," €";
    echo PHP_EOL;
    echo "le montant total de l'article est ",round($prix/1.20,2),"€";}
