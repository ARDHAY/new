<?php
function compare($x,$y){
    $resultat = ($x==$y)?('les deux valeurs sont égaux'):
        (($x<$y)? (' la premiere valeur   est plus petite que y'):
        ('la deuxieme valeur est la plus petite'));
return $resultat;
}
 echo compare( 6,3);