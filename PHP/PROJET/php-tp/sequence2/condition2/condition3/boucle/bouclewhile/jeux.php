<?php
$tentative=random_int(10,15);
$jeux=random_int(1,100);
$tentativejoueur=0;
$pseudo=readline("votre pseudo ");
$nombrejoueur = readline("entrée un nombre ");
while ($tentativejoueur<=$tentative) {
    while ($nombrejoueur > 100 || $nombrejoueur < 1) {
        $nombrejoueur = readline("Mauvaise saisie ressaisir ");
    }
    if ($nombrejoueur < $jeux) {
        $nombrejoueur = readline("le nombre est plus grand ");
    } elseif ($nombrejoueur > $jeux) {
        $nombrejoueur = readline("le nombre est plus petit ");
    }
    if ($nombrejoueur == $jeux) {
        if ($tentativejoueur > 10) {
            $resultat = "Bien joué ";
        } elseif ($tentativejoueur <= 10) {
            $resultat = "Exellent ";
        }
        echo $resultat.$pseudo." : vous avez trouvé le nombre ".$jeux." en ".$tentativejoueur." tentatives ! ";
        $textData = "! Vous avez trouvé le nombre en ".$tentativejoueur." essais";
        break;
    }
    $tentativejoueur++;
}
if($tentativejoueur>$tentative){
    $resultat = "Perdu";
    echo " Désolé ".$pseudo." : vous avez atteint le nombre maximum de tentatives ! Le nombre était ".$tentativejoueur;
    $textData = " ! Le nombre a deviner etait ".$jeux;
}
$data = date('d-m-Y-H-i-s')." - Pseudo ".$pseudo." - Résultat: ".$resultat.$textData."\n";
$path = fopen('jeux.txt', 'a+');
fwrite($path, $data);
fclose($path);