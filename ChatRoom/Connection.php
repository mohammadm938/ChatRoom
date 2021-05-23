<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'pdo';
$connect=new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($connect->connect_errno){
    printf("connect failed".$connect->connect_error);
    exit();
}

$connect->query("SET NAMES UTF8");

/*function test_input($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}*/

?>