<?php

class Goodbye{
    const message = "Thank you";

}


echo Goodbye::message;  // (::) it's call Scope resulation
// const er jonno (public privete) define korte hoy na, object o create korte hoy na
?>

<hr>


<?php

class Goodbyeagain{
    const message = "Thank you";

    function byebye(){
        // echo goodbye::message;
        echo self::message;
    }
}

$obj = new Goodbyeagain();
$obj->byebye();
?>