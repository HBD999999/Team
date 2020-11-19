<?php
session_start();
require("dbconnect.php");
$sql = "select * from student where 1;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Application</title>
</head>

<body>

<h1>my Application Status</h1>
<hr />

<table width="500" border="1">
  <tr>
    <td>id</td>
    <td>name</td>
    <td>father</td>
    <td>mother</td>
    <td>type</td>
    <td>status</td>
  </tr>
<?php
while (	$rs=mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $rs['id'] . "</td>";
  echo "<td>" , $rs['name'] , "</td>";
  echo "<td>" , $rs['father'] , "</td>";
  echo "<td>" , $rs['mother'] , "</td>";
  echo "<td>" , $rs['type'] , "</td>";
  echo "<td>" , $rs['status'] , "</td></tr>";
}
?>
</table>
</body>
</html>
