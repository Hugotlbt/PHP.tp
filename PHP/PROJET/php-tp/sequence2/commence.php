<?php
//demander la saisie d'un mot
//afficher si le mot commance par la lettre p

//$mot=readline("saisir un mot: ");
//$mot=strtolower($mot);
//if (str_starts_with($mot,'p')) {
    //echo "ton mot commence pas P/";
//} else{
    //echo "ton mot ne commence pas par P";
//}

// afficher si le mot contient plus de 5 lettres (inclus)

$mot=readline("saisir un mot");
if (strlen($mot) >= 5){
    echo "ton mot a 5 lettres";
}else{
    echo "ton mot ne detietn pas 5 lettres";
}