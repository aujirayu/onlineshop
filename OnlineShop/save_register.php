<?php
include $con = "connect/connect.php";

if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$strSQL = "SELECT * FROM member WHERE username = '" . trim($_POST["txtUsername"]) . "' ";
$objQuery = mysqli_query($con, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
if ($objResult) {
    echo "Username already exists!";
} else {
    $strSQL = "INSERT INTO member (userID,username,password,name,address,status,telephone) VALUES('01','" . $_POST["txtUsername"] . "','" . $_POST["txtPassword"] . "','" . $_POST["txtName"] . "' ,'" . $_POST["txtAddress"] . "','User','" . $_POST["txtTelephone"] . "')";
    $objQuery = mysqli_query($con,$strSQL);
}
?>