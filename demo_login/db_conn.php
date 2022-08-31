<?php
    
$sname = "localhoast";
$uname = "root";
$password = "";

$db_name = "login";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn) {
    echo "Connection Failed";
}
?>