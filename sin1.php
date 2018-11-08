<?php
function sinus($x,$y){

    $resultat = ($y=='r'||"R")?(sin($x)):
        (($y=='d'||"D")? (sin($x*3.14/180)):
            (sin($x*3.14/200)));
    return $resultat;
}
echo sinus(30,'g');