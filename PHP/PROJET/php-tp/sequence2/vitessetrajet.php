<?php
$fondRouge = "\033[41m";
$texteRouge = "\033[31m";
$fondVert = "\033[42m";
$texteVert = "\033[32m";
$normal = "\033[0m";
$d=readline("saisir une distance (en km): ");
$t=readline("saisir une durée (h:mm): ");
if ($t>"1:60"){
    echo $texteRouge."ERREUR de saisit";
$heure=substr($t,0,1);
$minutes=substr($t,2,2);
$hm=intval($minutes)/60 + intval($heure);
$vitesse=$d/$hm;
echo "votre vitesse est de $vitesse kmh";
if ($vitesse<90) {
    echo PHP_EOL;
    echo $fondVert."votre vitesse est inferieur a 90kmh".$normal;
} else {
    echo PHP_EOL;
    echo $fondRouge."votre vitesse est superieur a 90kmh".$normal;
}
