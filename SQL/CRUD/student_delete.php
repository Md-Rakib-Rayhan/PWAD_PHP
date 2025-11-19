<?php


$id = $_REQUEST["id"];
// $id = $_GET["id"]; #same

$sql = "DELETE FROM students WHERE id = $id";

include_once("db_config.php");

$db -> query($sql);

header("Location:index.php"); # index.php page a cole jabe
$db->close();


?>


