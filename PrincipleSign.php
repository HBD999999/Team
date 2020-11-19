<?php
require("dbconnect.php");
$Psign=mysqli_real_escape_string($conn,$_POST['Psign']);
$id=(int)$_POST['id'];

if ($Tcontent) { //if title is not empty
	$sql = "update student set Psign='$Psign' where id=$id;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$Psign="Message Added";
} else {
	$Psign= "Message cannot be empty";
}
?>
<a href="PrincipleList.php">Back</a>