<?php
$hutil=readline("rentrer une heure h:m :");
$hutil=substr(0,2);
if (($hutil >= '09') && ($hutil <= '19')){
    echo "ouvert";
}else{
    echo "fermer";
}


