<?php

    // $a = 10;
    // $b = 20;
    // $v = 40;
    // $c = 20;
    // $d = 30;

    $arr = array(12,10,50,2,4);
    $big = $arr[0];

    for($i = 0; count($arr)>$i; $i++){

        if($big<$arr[$i]){

            $big = $arr[$i];
        }
    }

    echo "The biggest number is $big";




?>