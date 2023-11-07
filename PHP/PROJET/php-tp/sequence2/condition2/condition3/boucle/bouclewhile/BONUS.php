<?php
echo "Distributeur de boissons";
echo PHP_EOL;
echo "1. Eau - 1€20";
echo PHP_EOL;
echo "2 Soda - 3€";
echo PHP_EOL;
echo "3 Café - 2€";
$eau=1;
$soda=2;
$cafe=3;
$eaup=1.20;
$sodap=3;
$cafep=2;
echo PHP_EOL;
$selection = readline("Veuillez sélectionner une boisson (1, 2, ou 3)");
while ($selection>3||$selection<=0){
    echo PHP_EOL;
    $selection=readline("Sélection invalide. Veuillez choisir 1, 2, ou 3");
}
// choix de boisson numero 1:
if ($selection==1){
    echo PHP_EOL;
    $entreprix=(readline("Veuillez insérer de l'argent. Il vous reste à payer ".$eaup."€ "));
    while ($entreprix!=$eaup){
        if ($entreprix<1.20){
        $entreprix= $entreprix + readline("Veuillez insérer de l'argent. Il vous reste ".($eaup-$entreprix)." a payer");
        }elseif ($entreprix>1.20){
            echo "Voici vos ".($entreprix-$eaup)." euros";
            $entreprix=$eaup;
        }
    }echo "c tout bon";
//fin de boisson numero 2
}elseif ($selection==2){
        echo PHP_EOL;
        $entreprix=(readline("Veuillez insérer de l'argent. Il vous reste à payer ".$sodap."€ "));
        while ($entreprix!=$sodap){
            if ($entreprix<3){
                $entreprix= $entreprix + readline("Veuillez insérer de l'argent. Il vous reste ".($sodap-$entreprix)." a payer");
            }elseif ($entreprix>3){
                echo "Voici vos ".($entreprix-$sodap)." euros";
                $entreprix=$sodap;
            }
        }echo "c tout bon";}
else{
        echo PHP_EOL;
        $entreprix=(readline("Veuillez insérer de l'argent. Il vous reste à payer ".$cafep."€ "));
        while ($entreprix!=$cafep){
            if ($entreprix<2){
                $entreprix= $entreprix + readline("Veuillez insérer de l'argent. Il vous reste ".($cafep-$entreprix)." a payer");
            }elseif ($entreprix>2){
                echo "Voici vos ".($entreprix-$cafep)." euros";
                $entreprix=$cafep;
            }
        }echo "c tout bon";}