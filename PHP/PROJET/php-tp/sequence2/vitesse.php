<?php
$d=readline("saisir une distance (en km): ");
$t=readline("saisir une durée (h:mm): ");
$heure=substr($t,0,1);
$minutes=substr($t,2,2);
$hm=intval($minutes)/60 + intval($heure);
$vitesse=$d/$hm;
echo "votre vitesse est de $vitesse kmh";
if ($vitesse<90) {
    echo PHP_EOL;
    echo "votre vitesse est inferieur a 90kmh";
} else {
    echo PHP_EOL;
    echo "votre vitesse est superieur a 90kmh";
}
