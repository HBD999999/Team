<?php
require("dbconnect.php");
$Scontent=mysqli_real_escape_string($conn,$_POST['Scontent']);
$result=mysqli_real_escape_string($conn,$_POST['result']);
$Ssign=mysqli_real_escape_string($conn,$_POST['Ssign']);
$id=(int)$_POST['id'];
if ($Scontent) { //if title is not empty
	$sql = "update student set Scontent='$Scontent', result='$result', Ssign='$Ssign' where id =$id;";//////////////
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$msg="Message updateded";
} else {
	$msg="Message title cannot be empty";
}
header("location:secretary.php");
?>