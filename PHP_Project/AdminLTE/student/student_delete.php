<?php
include_once("../inc/sql/db_config.php");
session_start();
if (!isset($_SESSION["logedin"])){
  header("location: $home_url");
}
?>


<?php

$id = $_GET["id"];
$sql = "DELETE FROM students WHERE id = $id";
$db->query($sql);


if($db->affected_rows)
{
    $_SESSION["msg"] = "Successfully Deleted";
    
}

header("location: student_list.php");


?>