<?php

$cookie_name = "user";
$cookie_value = "Md. Rakib Rayhan";

setcookie($cookie_name, $cookie_value, time() + (60), "/");

// time() + (60) => current time + expire time in second
// "/" => sob page theke access kora jabe (/about -> sodho about page theke access hobe)

// setcookie(name, value, expire, path, domain, secure, httponly);
?>

<?php

    if(!isset($_COOKIE[$cookie_name])){ // brower or user onnek somoy cookie off kore rakhe
        echo "Cookie is not set, maybe your brower not allowing cookie";
    }else{
        echo $_COOKIE[$cookie_name]; // $_COOKIE["user"]
    }

?>


<!-- Ek page/website er cookie onno page/website/javascript code diyeu access(view, update, del) kora jay -->

