<?php
$sexe=readline("Donnez votre sexe (M pour homme) et (F pour femme) ");
$age=readline("Donnez votre age " );
if (($sexe=="M") && ($age>=22)){
    echo "Une surprime s'applique";
}elseif (($sexe=="F") && ($age >= 22 && $age <= 30)){
    echo "une surpime s'applique";
}else{
    echo "une surprime ne s'applique pas";
}
