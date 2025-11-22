<?php

include_once("../inc/sql/db_config.php");

$id = $_GET["id"];
$sql = "DELETE FROM students WHERE id = $id";
$db->query($sql);


if($db->affected_rows)
{
    session_start();
    $_SESSION["msg"] = "Successfully Deleted";
    
}


header("location: student_list.php");





?>