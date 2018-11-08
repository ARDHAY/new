<?php
$_noteMath=14;
$_noteInfo=12;
$_noteTechnique=16;

$_moy=($_noteInfo+$_noteMath+$_noteTechnique)/3;

$_resultat=($_moy<10)? 'refuse':((($_moy>=10 && $_moy<12)? 'admis avec mention passable': (($_moy>=12 && $_moy<14)? 'admis avec mention assez bien':'admis avec mention bien')));

echo $_resultat ;

?>


