<?php
$nombre=readline("saisir la largeur souhaiter: ");
$nombreh=readline("saisir la hauteur souhaiter: ");
for ($e=1;$e<=$nombreh;$e+=1){
    for ($i=1;$i<=$nombre;$i+=1){
        echo "* ";
    }
    echo "\n";
}