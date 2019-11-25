<?php
//$con = mysqli_connect("localhost","root","9559AaAa","project01_db");
//$con = mysqli_connect("localhost","root","","project01_db");

$con = mysqli_connect("localhost","root","","onlineshop");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else {
    echo "success";
}
mysqli_query($con,"SET character_set_results=utf8");
mysqli_query($con,"SET character_set_client=utf8");
mysqli_query($con,"SET character_set_connection=utf8");
mysqli_query($con,"SET NAMES UTF8");
mysqli_set_charset($con,'utf8');

?>