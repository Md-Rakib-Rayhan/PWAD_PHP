<!-- 
 3 step to set & get session
 Step 1 : session_start();
 Step 2 : $_SESSION[name] = value; 
 Step 3 : echo $_SESSION[name];

 2 step to delete session
 Step 1: SESSION_unnset(); // Remove all session variables
 Step 2: SESSION_destroy(); // Destroy the session
-->

<?php

    session_start();
    $_SESSION["myname"] = "Rakib Rayhan";
    echo "Session is created";

    // echo "<pre>";
    // print_r($_SESSION);

    // NOTE: ____ View the newly created session in your folder C:\xampp\tmp

?>