<?php
echo "saisir un nombre (nombre 1):";
echo $nombre1=readline("saisir un nombre (nombre 1):");
echo PHP_EOL;
echo "saisir un nombre (nombre 2):";
echo $nombre2=readline("saisir un nombre (nombre 2):");
echo $resulat=($nombre1 / $nombre2);
echo PHP_EOL;
echo round($resulat,2);