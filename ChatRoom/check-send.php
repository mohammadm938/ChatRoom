<?php
session_start();
include "Connection.php";

$smt=$connect->prepare("INSERT INTO `chat`(`username`, `text`) VALUES (?,?)");
$smt->bind_param('ss',$_SESSION['user'],$_POST['msg']);
$smt->execute();
$smt->fetch()
?>