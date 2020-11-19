<?php
session_start();
require("dbconnect.php");
if(isset($_GET['m'])){
	$msg='<front color = "red">'. $_get['m']."<front>";
}else{
	$msg="good morning";
}
$sql = "select * from student where 1 ";
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
<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>name</td>
    <td>type</td>
    <td>father</td>
	<td>mother</td>
    <td>status</td>
	<td>Tcontent</td>
	<td>Tsign</td>
	<td>Scontent</td>
	<td>result</td>
	<td>Ssign</td>
  </tr>
<?php
while (	$rs=mysqli_fetch_assoc($result)) {//透過while抓取資料
    echo "<tr><td>" . $rs['id'] . "</td>";//the first grid
	echo "<td>" . $rs['name'] . "</td>";//the first grid
	echo "<td>{$rs['type']}</td>";
	echo "<td>" , $rs['father'], "</td>";//we want to show the content
	echo "<td>",$rs['status'], "</td>";	
	echo "<td>",$rs['Tcontent'], "</td>";	
	echo "<td>",$rs['Tsign'], "</td>";	
	echo "<td>",$rs['Scontent'], "</td>";
    echo "<td>",$rs['result'], "</td>";		
	echo "<td>" . $rs['Ssign']   ;
	echo "<a href = 'secretaryEditForm.php?id={$rs['id']}'> Edit</a>" . 
	//在status的地方加上超連結的標籤，值是todoset執行值時的接著給他參數:用迴圈fetch抓到的id來用
	//在status的地方再加上修改
	"<a href = 'todoReport.php?id={$rs['id']}'> </a>" . "</td></tr>";
	
}
?>
</table>
<a href="addSecretaryForm.php"></a> 
</body>
</html>



