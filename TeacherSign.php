<?php
require("dbconnect.php");

$id=(int)$_GET['id'];

if ($id) { //if title is not empty
	$sql = "update student set status = 1 where id=$id;";

	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$Tsign="Message Added";
} else {
	$Tsign= "Message cannot be empty";
}
?>
<a href="TeacherList.php">Back</a>