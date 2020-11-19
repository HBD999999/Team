<?php
session_start();
require("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>Secretary Add  Somethings</h1>
<form method="post" action="addSecretary.php"> 

      Scontent: <input name="Scontent" type="text" id="Scontent" /> <br>

      result: <input name="result" type="text" id="result" /> <br>

      Ssign: <input name="Ssign" type="text" id="Ssign" /> <br>

      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
</body>
</html>
