<?php
session_start();
require("dbconnect.php");
$id = (int)$_GET['id']; //////
$sql = "select * from student where id = $id;";//select*from:to get the data,where:catch datas that match your condition
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
$rs=mysqli_fetch_assoc($result);//catch one
if(! $rs){
	echo "no data found";
	exit(0);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>Add New Task</h1>
<form method="post" action="secretaryEdit.php"> 
	   
	  <input name="id" type="hidden" id = "id" value ="<?php echo $id ?>" /> <br>
	  
      Scontent: <input name="Scontent" type="text" id="Scontent" value ="<?php echo htmlspecialchars ($rs['Scontent']);?>" /> <br>

      result: <input name="result" type="text" id="result" value ="<?php echo htmlspecialchars ($rs['result']);?>" /> <br>

      Ssign: <input name="Ssign" type="text" id="Ssign" value ="<?php echo htmlspecialchars ($rs['Ssign']);?>" /> <br>
	  
      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
</body>
</html>