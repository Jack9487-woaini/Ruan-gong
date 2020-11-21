<?php
require("todoModel.php");

$student=mysqli_real_escape_string($conn,$_POST['student']);
$sid=(int)$_POST['sid'];
$dad=mysqli_real_escape_string($conn,$_POST['dad_name']);
$mom=mysqli_real_escape_string($conn,$_POST['mom_name']);
$help_money=(int)$_POST['help_money'];

if ($student) { //if title is not empty
    addJob($student,$sid,$dad,$mom,$help_money);
	$msg="Message updateded";
} else {
	$msg= "Message title cannot be empty";
}
header("Location: todoListView.php?m=$msg");
?>