<?php
function sinus($x){
    $res= $x{strlen($x)-1};

    $resultat = ($res=='r'||"R")?(sin((int) $x)):
        (($res=='d'||"D")? (sin((int) ($x*3.14/180))):
            (sin((int)($x*3.14/200))));
    return $resultat;
}
echo sinus("30r");