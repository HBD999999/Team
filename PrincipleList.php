<?php
session_start();
require("dbconnect.php");

$sql = "select * from student where status = 2 or 3 order by status ASC";

$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>Principle List !! </p>
<hr />
校長簽章

<table width="500" border="1">

  <tr>
    <td>id</td>
    <td>name</td>
    <td>type</td>
	<td>father</td>
    <td>mother</td>
	<td>status</td>
	<td>Tcontent</td>
	<td>Scontent</td>
	<td>result</td>
	<td>-</td>
  </tr>
<?php

while (	$rs=mysqli_fetch_assoc($result)) {

	echo "<tr><td>" . $rs['id'] . "</td>";
	echo "<td>{$rs['name']}</td>";
	echo "<td>" , htmlspecialchars($rs['type']), "</td>";
	echo "<td>" , htmlspecialchars($rs['father']), "</td>";
	echo "<td>" , htmlspecialchars($rs['mother']), "</td>";
	echo "<td>" , $rs['status'],  "</td>" ;
	echo "<td>" , $rs['Tcontent'], "</td>";
	echo "<td>" , $rs['Scontent'], "</td>";
	echo "<td>" , $rs['result'], "</td>";
	echo "<td>" ;

	if ($rs['status'] == 2)
    echo "<a href='PrincipleSign.php?id={$rs['id']}'> Sign </a> " , "</td></tr>";
  echo "</td></tr>";

}
?>
</table>
</body>

</html>
