<?php
require("todoModel.php");

$student=mysqli_real_escape_string($conn,$_POST['student']);
$sid=(int)$_POST['sid'];
$dad=mysqli_real_escape_string($conn,$_POST['dad_name']);
$mom=mysqli_real_escape_string($conn,$_POST['mom_name']);
$help_money=(int)$_POST['help_money'];

if ($student) { //if title is not empty
    $sql = "insert into form_info (name,sID,father,mother,family_status,mentor_comment,mentor_sign,secretary_verify,secretary_comment,secretary_sign,principal_sign,form_status) values ('$student','$sid', '$dad','$mom','$help_money',NULL,NULL,1,NULL,NULL,NULL,1);";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$msg="Message updateded";
} else {
	$msg= "Message title cannot be empty";
}
header("Location: todoListView.php?m=$msg");
?>