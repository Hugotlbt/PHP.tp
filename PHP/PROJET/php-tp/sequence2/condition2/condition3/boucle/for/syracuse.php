<?php
$nombre=readline("saisie un nombre ma biche: ");
for ($i=1;$i<=20;$i+=1){
    echo $nombre." ";
    if ($nombre%2==0){
        $nombre=$nombre/2;
    }else{
        $nombre=$nombre*3+1;
    }
}