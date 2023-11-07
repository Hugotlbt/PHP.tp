<?php
$data = "Salut les zigoto\n";
$path = fopen('testo.txt','a+');
fwrite($path, $data);
fclose($path);