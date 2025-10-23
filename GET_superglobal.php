<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Current page er link diei sathe ekta name value/data deya holo -->
    <a href="GET_superglobal.php?name=rayhan&age=2020">Click Here</a>


    <?php

        if (isset($_GET["name"])){ // click er age jate warning na ase
            echo "<br>" . $_GET["name"];
            echo "<br>" . $_GET["age"];
        }

        // Logic Behind:
        // form jodi get hoy, then submit korar por url a show kore
        // to same logic anchor<a> a click korle url change hoye and $_GET o value dhorte pare



    ?>
    




</body>
</html>