<?php    
function calc($price, $tax="0") 
{      $total = $price + ($price * $tax);        
        echo "$total";    
 }    

calc(42);        

?>



<?php

    function sum($num1, $num2)

    {

     $total = $num1 + $num2;

       echo "($total)";

    }

     $var1 = "sum";

    $var1(5, 44);   


?>


<hr>

<?php

    $arr = array("rakib", "Rayhan", "Nw");
    $n = array_pop($arr);   

    print_r($arr);
    print_r($n);



?>