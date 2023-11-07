<?php
$date = '27/09/2013';
$dt = DateTime::createFromFormat('d/m/Y', $date);
$jours = ($dt->format('d/m/Y'));
echo "Nous somme le $jours",
PHP_EOL;
$heure = ($dt->format('H:i'));
$hrentre= readline("rentrer une heure");