<?php
session_start();
require("dbconnect.php");
if(isset($_GET['m'])){
	$msg='<front color = "red">'. $_get['m']."<front>";
}else{
	$msg="good morning";
}
$sql = "select * from student where status = 1 ";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>Secretary List !! </p>
<hr />
<? php echo $msg;?>
<table width="500" border="1">
  <tr>
    <td>id</td>
    <td>name</td>
    <td>type</td>
    <td>father</td>
	<td>mother</td>
    <td>status</td>
	<td>teacher description</td>
	<td>suggestion</td>
	<td>result</td>
	<td>-</td>
  </tr>
<?php
while (	$rs=mysqli_fetch_assoc($result)) {//透過while抓取資料
    echo "<tr><td>" . $rs['id'] . "</td>";//the first grid
	echo "<td>" . $rs['name'] . "</td>";//the first grid
	echo "<td>{$rs['type']}</td>";
	echo "<td>" , $rs['father'], "</td>";//we want to show the content
	echo "<td>",$rs['mother'], "</td>";	
	echo "<td>",$rs['status'], "</td>";	
	echo "<td>",$rs['Tcontent'], "</td>";	
	echo "<td>",$rs['Scontent'], "</td>";
		echo "<td>",$rs['result'], "</td>";	
		echo "<td>" , "<a href='secretarySign.php?id={$rs['id']}'> Sign </a>";
	echo "<a href='secretaryEditForm.php?id={$rs['id']}'> Edit </a> " , "</td></tr>";
	
}
?>
</table>
<a href="addSecretaryForm.php"></a> 
</body>
</html>



