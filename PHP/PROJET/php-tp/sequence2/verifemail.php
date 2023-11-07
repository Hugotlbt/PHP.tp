<?php
$mail = readline("saisir une adresse mail");
//(str_ends_with($mail, 'gmail.com','laposte.net')
if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
    echo "l'adresse mail est valide'";
} else {
    echo "l'adresse mail est invalide";
}
