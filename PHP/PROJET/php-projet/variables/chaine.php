<?php

$prenom = "jean";
// mettre en majuscule le prenom
echo strtoupper($prenom);
echo PHP_EOL;
$prenomMaj= strtoupper($prenom);
echo $prenomMaj;
echo PHP_EOL;
echo strlen($prenom);
echo PHP_EOL;
echo strtoupper(substr($prenom,0,1));