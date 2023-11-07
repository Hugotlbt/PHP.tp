<?php
echo "saisir un nombre (nombre 1):";
echo $nombre1=readline("saisir un nombre (nombre 1):");
echo "saisir un nombre (nombre 2):";
echo $nombre2=readline("saisir un nombre (nombre 2):");
echo "saisir un nombre (nombre 3):";
echo $nombre3=readline("saisir un nombre (nombre 3):");
echo "Le nombre le plus grand est :".max($nombre2,$nombre1,$nombre3);
