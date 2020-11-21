<?php
session_start();
require("userModel.php");

$userName = $_POST['id'];
$passWord = $_POST['pwd'];
if (checkUserIDPwd($userName, $passWord)) {
	$_SESSION['uID'] = $userName;
    $info = getUserinfo($userName, $passWord);
    $_SESSION['level'] = $info[0];
    $_SESSION['myname'] = $info[1];
	header("Location: todoListView.php");
} else {
	$_SESSION['uID']="";
	header("Location: loginForm.php");
}
?>
