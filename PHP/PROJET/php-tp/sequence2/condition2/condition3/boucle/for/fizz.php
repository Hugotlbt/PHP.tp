<?php
for ($nombre=1;$nombre<=30;$nombre+=1){
    if ($nombre%3==0){
        echo "fizz ";
    }elseif($nombre%5==0){
        echo "buzz ";
    }elseif($nombre%15==0){
        echo "fizz buzz ";
    }else{
        echo $nombre . ' ';
    }
}
