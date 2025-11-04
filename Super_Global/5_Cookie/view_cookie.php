<?php

    if(isset($_COOKIE["user"])){
        echo "Cookie Value: " . $_COOKIE["user"];
    }else{
        echo "No Cookie here";
    }

    // Delete that Cookie
    setcookie("user", "", time() - (60), "/");

    // ager time er + er jaygay - deya, mane current time theke 60min agei delete hoise

    

?>