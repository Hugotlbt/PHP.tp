<?php
$mois=readline("entrée un mois: ");
$annee=readline("entrée une année: ");
for ($e=1;$e<=4;$e+=1) {
    for ($i = 1; $i <= 7; $i += 1) {
        echo "*  ";
    }
    echo "\n";
}