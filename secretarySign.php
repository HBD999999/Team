<?php
require("dbconnect.php");
$id=(int)$_GET['id'];

if ($id) { //if title is not empty
	$sql = "update student set status = 2 where id=$id;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
} 
?>
<a href="secretary.php">Back</a>