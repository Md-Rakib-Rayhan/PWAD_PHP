<?php
include_once("00_db_config.php");

$id = $_REQUEST["id"];

$sql = "DELETE FROM students WHERE id = $id";
$db -> query($sql);

header("Location:02_student_list.php"); 
$db->close();


?>


