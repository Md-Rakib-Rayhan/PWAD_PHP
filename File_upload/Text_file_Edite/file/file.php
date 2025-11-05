<?php

    $mydata = file("user.txt"); //array akare niye ase line by line

    // echo "<pre>";
    // print_r($mydata);

    foreach ($mydata as $data) {
        // echo $data . "<br>";
        // $info = explode(" ", $data); //separate data by space
        list($name, $email) = $info = explode(" ", $data);
        echo "Name: ". $name . " Email: ". $email ."<br>";
    }

?>