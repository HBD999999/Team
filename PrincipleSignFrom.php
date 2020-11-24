<?php
session_start();
require("dbconnect.php");
$id = (int)$_GET['id'];
$sql = "select * from student where id = $id;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
$rs=mysqli_fetch_assoc($result);
if (! $rs) {
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
<h1>Sign</h1>
<form method="post" action="PrincipleSign.php">

	  <input type='hidden' name='id' value='<?php echo $id ?>'>

      sign: <input name="Psign" type="int" id="Psign" value="<?php echo htmlspecialchars($rs['Psign']);?>" /> <br>

      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
</body>
</html>
