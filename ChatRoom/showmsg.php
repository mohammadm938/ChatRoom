<?php
include "Connection.php";
$sql="select * from chat";
$result=$connect->query($sql);
foreach( $result as $rows)
{
	if($rows["text"]==":D")
	echo '<img src="fun.png" width="30px" height="30px"><br>';
	else
	echo '<font color="#FF0000">'.$rows["username"]." : </font>".$rows["text"]."<br>";
}

?>