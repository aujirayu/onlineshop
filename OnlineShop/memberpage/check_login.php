<?php

include $con = "../connect/connect.php";

$strSQL = "SELECT * FROM member WHERE username = '".($_POST['txtUsername'])."'
	and password = '".($_POST['txtPassword'])."'";
$objQuery = mysqli_query($con,$strSQL);
$objResult = mysqli_fetch_array($objQuery);


if(!$objResult)
{
    echo"<script>window.alert('รหัสสมาชิกหรือรหัสผ่านไม่ถูกต้อง'),window.location='login.php';</script>";
    exit();
    
}
else
{
    $_SESSION["userID"] = $objResult["userID"];
    $_SESSION["status"] = $objResult["status"];
    
    session_write_close();
    
    if($objResult["status"] == "admin")
    {
        header("location:admin_page.php");
    }
    else
    {
        header("location:user_page.php");
    }    
}
mysqli_close();
?>