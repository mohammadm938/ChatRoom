<?php session_start();?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery.js"></script>
<script>
$(document).ready(function(e) {
    $("#send").click(function(){
		
		var message=$("#text").val();
		$.post("check-send.php",{msg:message,send:true});
		$("#text").val("");
		return false;
		});
		function showmsg()
		{
			$.post("showmsg.php",function(data){
				
				$("#content").html(data);
				
				});
		}
	setInterval(showmsg,500);
});

</script>
<meta charset="utf-8">
<title>Chat-Room</title>
</head>

<body>
<?php
if(isset($_SESSION["user"]))
{
?>
<div id="all">
<div id="title"><?php echo $_SESSION["user"] ?> به چت روم خوش آمدید</div>
<div id="content"></div>
</div>
<form>
  <input type="text" name="text" id="text">
  <input type="button" name="send" id="send" value="Send">
  
</form>
<form action="exit.php" method="post">
<input type="submit" value="Exit" name="exit"  id="exit">
</form>
<?php
}
else
{
	header("location:index.php");
	exit;
}
?>
</body>
</html>