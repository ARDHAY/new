<?php
function produit(){
    $prod=1;
    $nbr=func_num_args();
     for ( $i=0;$i<$nbr;$i++){
         if( func_get_arg($i)!=0){
             $prod=$prod*func_get_arg($i);
         }
     }return $prod;
}
echo produit(1,2,4,0,2);


