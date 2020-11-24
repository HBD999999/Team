<?php
require("dbconnect.php");
$Tcontent=mysqli_real_escape_string($conn,$_POST['Tcontent']);
$id=(int)$_POST['id'];

if ($Tcontent) { //if title is not empty
	$sql = "update student set Tcontent='$Tcontent' where id=$id;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$Tsign="Message Added";
} else {
	$Tsign= "Message cannot be empty";
}
?>
<a href="TeacherList.php">Back</a>