


<?php

function extracktByTipe($array, $type)
{

    $arr_res = array();

    foreach ($array as $item)
{
    if (gettype($item)===$type){
        $arr_res[]=$item;
    }

}
    echo 'la selections des ' . $type . 's a donner le tableau suivant';
    echo '<hr>';
    echo"<th>" ;print_r($arr_res);  echo "</b></th>";



}
$array = array(1, 1.5, 2.15, 3, array(1, 2, 3),array('a', 'e', 3), true);

extracktByTipe($array, 'integer');



