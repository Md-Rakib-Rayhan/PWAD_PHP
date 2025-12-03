<?php

$db = new mysqli("localhost", "root", "", "evidence_test");

$id = $_GET['id'];
$sql = "DELETE FROM manufacturer WHERE id = $id";
$db -> query($sql);

header("location: 3_trigger.php");
$db->close();

?>