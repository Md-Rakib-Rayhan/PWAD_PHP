<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php

        echo "<pre>";
        print_r($_SERVER);

        echo "<br>" . $_SERVER["REQUEST_METHOD"];
        echo "<br>" . $_SERVER["SERVER_NAME"];
        echo "<br>" . $_SERVER["DOCUMENT_ROOT"];
        echo "<br>" . $_SERVER["REQUEST_URI"];


    ?>



</body>
</html>