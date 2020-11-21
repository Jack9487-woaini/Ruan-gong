<?php
session_start();
require("userModel.php");

$userName = mysqli_real_escape_string($conn,$_POST['id']);
$passWord = mysqli_real_escape_string($conn,$_POST['pwd']);
$level = (int)$_POST['level'];
$myname = mysqli_real_escape_string($conn,$_POST['myname']);
adduser($userName, $passWord, $level, $myname);
if (checkUserIDPwd($userName, $passWord)) {
    header("Location: loginForm.php");
}else{
    echo "未成功創建帳號";
}
?>