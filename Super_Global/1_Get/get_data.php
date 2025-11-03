<?php

    echo "<pre>";
    print_r($_GET); // Show all data from GET (print_r is used to display arrays)
    echo "</pre>";

    echo "Name = " . $_GET['fname'] . "<br>";
    echo "Age = " . $_GET['age'] . "<br>";

?>



<!-- The <pre> tag is used to see the data in a clear, proper structure. -->
<!-- It shows the output exactly as it is, with spaces and line breaks. -->
<!-- Other tags like <p> or <h1> show everything in one line. -->