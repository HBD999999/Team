<?php
require("dbconnect.php");
$Tsign=mysqli_real_escape_string($conn,$_POST['Tsign']);
$id=(int)$_POST['id'];

if ($Tcontent) { //if title is not empty
	$sql = "update student set Tsign='$Tsign' where id=$id;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$Tsign="Message Added";
} else {
	$Tsign= "Message cannot be empty";
}
?>
<a href="TeacherList.php">Back</a>