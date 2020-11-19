<?php
session_start();
require("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Application Form</title>
</head>
<body>
<h1>Application Form</h1>
<form method="post" action="applyControl.php">

      id : <input name="id" type="text" id="id" /> <br>

      Name : <input name="name" type="text" id="name" /> <br>

      Father : <input name="father" type="text" id="father" /> <br>

      Mother : <input name="mother" type="text" id="mother" /> <br>

      Application Type : <input name="type" type="radio" id="type" value="低收入戶" /> 低收入戶
      <input name="type" type="radio" id="type" value="中低收入戶" /> 中低收入戶
      <input name="type" type="radio" id="type" value="家庭突發因素" /> 家庭突發因素 <br>

      <input type="submit" name="Submit" value="確認新增" />
	</form>
  </tr>
</table>
</body>
</html>
