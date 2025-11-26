<?php
include_once('db_config.php');


$id = $_GET['id'];
$sql = "DELETE FROM `manufacturer` WHERE Id = $id";
$db->query($sql);

header("Location: manufacturer.php");

?>