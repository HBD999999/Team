<?php
require("dbconnect.php");
$id=(int)$_GET['id'];

if ($id) { //if title is not empty
	$sql = "update student set status = 3 where id=$id;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$Psign="Message Added";
} else {
	$Psign= "Message cannot be empty";
}
?>
<a href="PrincipleList.php">Back</a>