<?php
require("dbconnect.php");
$Scontent=mysqli_real_escape_string($conn,$_POST['Scontent']);
$result=mysqli_real_escape_string($conn,$_POST['msg']);
$Ssign=mysqli_real_escape_string($conn,$_POST['name']);

if ($Scontent) { //if title is not empty
	$sql = "insert into student (Scontent,result, Ssign) values ('$Scontent','$result', '$Ssign');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	echo "Message added";
} else {
	echo "Message title cannot be empty";
}
?>
<a href="secretary.php">Back</a>