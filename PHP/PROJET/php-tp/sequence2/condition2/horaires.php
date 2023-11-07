<?php
$hutil=readline("rentrer une heure h:m :");
if (('12' <= $hutil) && ( $hutil <= '19')){
    echo "ouvert";
}elseif (('9' <= $hutil) && ($hutil <= '12')){
    echo "ouvert";
}else{
    echo "fermer";
}
