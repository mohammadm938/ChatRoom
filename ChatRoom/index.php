<?php session_start()?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST["btn"]))
{
if(empty($_POST["username"]))
{
	echo '<div id="msg">لطفا برای خود یک نام کاربری انتخاب نمائید</div>';
}
else
{
	$_SESSION["user"]=$_POST["username"];
	header("location:room.php");
	exit;
}
}
?>
<form id="login-form" name="form1" method="post">
  <p>
    <label for="textfield">Username:</label>
    <input type="text" name="username" id="textfield">
  </p>
  <p>
    <input type="submit" name="btn" id="submit" value="Login">
  </p>
</form>
</body>
</html>