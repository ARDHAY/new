<?php


function decompose()
{
    $arrpair = array();
    $arrinpair = array();
    $nbr = func_num_args();

    for ($i = 0; $i < $nbr; $i++) {
        if (func_get_arg($i) % 2 == 0) {
            array_push($arrpair, func_get_arg($i));
        }
    else
        {
            array_push($arrinpair, func_get_arg($i));
        }

    }
    print_r($arrpair);
    echo'<hr>';

    print_r($arrinpair) ;
}

 decompose(0, 3, -5, 4, -7,8);
