<?php
require("dbconnect.php");
$id=mysqli_real_escape_string($conn,$_POST['id']); 
$name=mysqli_real_escape_string($conn,$_POST['name']);
$father=mysqli_real_escape_string($conn,$_POST['father']);
$mother=mysqli_real_escape_string($conn,$_POST['mother']);
$type=mysqli_real_escape_string($conn,$_POST['type']);


if ($id) {
	$sql = "insert into student (id, name, father, mother, type) values ('$id', '$name', '$father', '$mother', '$type');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$msg = "Application added <br>";
} else {
	$msg = "ID cannot be empty <br>";
}
header("Location:studentView.php?m=$msg");

?>