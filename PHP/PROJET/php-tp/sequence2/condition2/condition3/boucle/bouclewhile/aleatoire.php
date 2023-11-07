<?php
$nbUtilisateur=readline("saisir un nombre entre 0 et 1000 ");
$compteur=0;
$nombreMachine=random_int(0,1000);
while ($nbUtilisateur<0 || $nbUtilisateur>1000){
    $nbUtilisateur=readline("saissir un nombre entre 0 et 1000");
}
while ($nbUtilisateur != $nombreMachine){
    $compteur++;
    $nombreMachine=random_int(0,1000);
    if ($compteur>=200){
        echo "tu nas pas deviné en moins de 200 coups !";
        break;
    }
}
if ($compteur<200){
    echo "Le nombre a devenier a ete trouver en $compteur coups";
}