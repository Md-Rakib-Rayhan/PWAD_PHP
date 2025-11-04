<?php

    $str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
    echo htmlentities($str);

    $info = "<h1>My Name is Rakib</h1> <br>";
    echo $info;

    $info_now = htmlentities($info);
    echo $info_now;

    // htmlentities use korle extra html/others tag disable kore ba normal string convert kore dey 
    // Mainly used for secuirity purpose (Preventing XSS (Cross-Site Scripting) Attacks)
    // Form a name,password etc te jate tag use kore spam/hack na korte pare

    //avabe kore \$ --> $,   &lt --> <,     &quot --> "
?>