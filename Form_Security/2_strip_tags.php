<?php

    echo strip_tags("Hello <b>world!</b>");
    echo "<br>";

    $info = "<h1>My Name is Rakib</h1> <br>";
    echo $info;

    $info_now = strip_tags($info);
    echo $info_now;

    // strip_tags use korle extra html/others tag remove kore
    // Mainly used for secuirity purpose
    // Form a name,password etc te jate tag use kore spam/hack na korte pare

?>