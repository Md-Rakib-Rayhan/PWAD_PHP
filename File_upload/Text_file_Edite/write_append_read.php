<?php

    // $myfile = fopen("student.txt", "w"); // write
    $myfile = fopen("student.txt", "a"); //append

 
    fwrite($myfile,"I will overwrite the student.txt file data\n");
    fclose($myfile);

?>


<!-- READ Again -->
<?php

    $myfile = fopen("student.txt", "r"); //read

    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);

?>
