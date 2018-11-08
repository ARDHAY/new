<?php
 function sum($x ,$y){
     return $x+$y;
 }
 echo sum ( 3,5);
 ?>

<?php
function hors_taxe($prix,$tax=19.6) {
    return "Prix Hors Taxes :". round($prix*(1-$tax/100),2);
}
$prix=154;
echo "Prix TTC= $prix &euro; ",hors_taxe($prix)," &euro;<br />";
// Va afficher 123.82
echo "Prix TTC= $prix &euro; ",hors_taxe($prix,19.6)," &euro;<br />";
// Va afficher 123.82
echo "Prix TTC= $prix &euro; ",hors_taxe($prix,5.5)," &euro;<br />";
// Va afficher 145.53
?>
