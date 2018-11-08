<?php
var_dump($_POST);
$fonction = $_POST['choix'];

function carree($largeur)
{
    echo 'aire du carree';
    return ($largeur * $largeur);
}

function cercle($largeur)
{
    echo 'aire du cercle';
    return ($largeur * $largeur * 3.14);
}

echo $fonction($_POST['valeur']);



