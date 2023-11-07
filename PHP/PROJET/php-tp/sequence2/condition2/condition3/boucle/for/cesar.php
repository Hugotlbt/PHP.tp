<?php
$caractere=readline("chaine de caracteres:");
$decalage=readline("decalage de nombres:");
for ($i=0;$i<strlen($caractere);$i++){
    $lettre = substr($caractere,$i,1);
    for ($a=0;$a<$decalage;$a++){
        $lettre ++;
        if (strlen($lettre)>=2){
            $lettre = substr($lettre, -1,1);
        }
    }
    echo $lettre;
}