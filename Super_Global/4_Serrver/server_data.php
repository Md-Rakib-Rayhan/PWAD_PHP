<?php
// SERVER actually SERVER er overall information dekhar jonno (form er jonno na)
// Ai file run kore full info dekha jabe, r form theke submit kore asle aitar form er data akhane add hobe -> (QUERY_STRING)

    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    echo $_SERVER['QUERY_STRING'] . "<br>"; // get er data akhane asbe / POST er ta asbe na
    echo $_SERVER['PHP_SELF'] . "<br>";
    echo $_SERVER['HTTP_HOST'] . "<br>";



?>


<!-- It is usually used to see information about: -->
<!-- - HTTP connection -->
<!-- - Server details -->
<!-- - Host details -->
<!-- - URL details -->