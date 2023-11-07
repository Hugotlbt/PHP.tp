$
<?php
$nombre1=readline("saisir un nombre:");
echo PHP_EOL;
$tva=readline("saisir TVA:");
$resulat=($nombre1 * ($tva/100));
$prix_ttc = $nombre1+$resulat;
echo PHP_EOL;
echo round($prix_ttc,2);