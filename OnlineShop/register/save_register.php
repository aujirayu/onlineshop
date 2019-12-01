<?php
include $con = "../connect/connect.php";

if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$Addrees = ($_POST["txtHouseNo"] . " " . $_POST["txtStreet"] . " " . $_POST["txtZone1"] . " " . $_POST["txtZone2"] . " " . $_POST["txtProvince"] . " " . $_POST["txtZIP"]);
$Name = $_POST["txtName"] . " " . $_POST["txtSurname"];
$id = mysqli_insert_id($con);


$strSQL = "SELECT * FROM member WHERE username = '" . trim($_POST["txtUsername"]) . "' ";
$objQuery = mysqli_query($con, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
if ($objResult) {
    echo "Username already exists!";
} else {
    $strSQL = "INSERT INTO member (userID,username,password,name,address,status,telephone) VALUES('$id','" . $_POST["txtUsername"] . "','" . $_POST["txtPassword"] . "','$Name','$Addrees','member','" . $_POST["txtTelephone"] . "')";
    $objQuery = mysqli_query($con, $strSQL);
    echo "Register Completed!<br>";
}
?>