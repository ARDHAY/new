<?php

$tableauDeCartes=array( 1=>([ 1=>'<img src="scopa/asso.jpg" alt="">']),
    2 => ([ 2=>'<img src="scopa/2.jpg" alt="">']),
    3=>([3=>'<img src="scopa/3.jpg" alt=""></a>']),
    4=>([4=>'<img src="scopa/4.jpg" alt="">']),
    5=>([5=>'<img src="scopa/5.jpg" alt="">']),
    6=>([6=>'<img src="scopa/6.jpg" alt="">']),
    7=>([7=>'<img src="scopa/7.jpg" alt="">']),
    8=>([8=>'<img src="scopa/8.jpg" alt="">']),
    9=>([9=>'<img src="scopa/9.jpg" alt="">',]),
    10=>([ 10=>'<img src="scopa/10.jpg" alt="">',]),
    11=>([11=>'<img src="scopa/11.jpg" alt="">',]),
    12=>([12=>'<img src="scopa/12.jpg" alt="">',]));


$scorej1=0;
$scorej2=0;

for($i=1;$i<=5;$i++){
    $joueur1[]=( array_rand($tableauDeCartes));
    //  print_r( $joueur1);
    echo'<br>';}
for($i=1;$i<=5;$i++){
    $joueur2[]=( array_rand($tableauDeCartes));
//print_r( $joueur2);
    echo'<br>';}
for($i=0;$i<5;$i++){
    if ($joueur1[$i]>$joueur2[$i]){
        $scorej1++;}
    echo $scorej1.'<br>';}
foreach ($tableauDeCartes as $key=>$val){
    foreach ($val as $k1=>$v1){
        foreach ($joueur1 as $k=>$v){
            if($k1==$v){
                print_r($v1);

            }
        }
    }}
echo'<br>';
for($i=0;$i<5;$i++){
    if ($joueur1[$i]<$joueur2[$i]){
        $scorej2++;}
    echo $scorej2.'<br>';}
foreach ($tableauDeCartes as $key=>$val){
    foreach ($val as $k1=>$v1){
        foreach ($joueur2 as $k=>$v){
            if($k1==$v){
                print_r($v1);

            }
        }
    }}

