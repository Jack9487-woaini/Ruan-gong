<?php
require("todoModel.php");
session_start();

$id=(int)$_POST['id'];
$level = $_SESSION['level'];
if ($level == 2){
    $teacher_hi_reason = mysqli_real_escape_string($conn,$_POST['mentor_comment']);
    $teacher_sign = mysqli_real_escape_string($conn,$_POST['mentor_sign']);
    $myarr = array($teacher_hi_reason, $teacher_sign);
    
    updateJob($id,$level,$myarr);
    $msg="Message updateded";
}else if($level == 3){
    $ver = (int)$_POST['money'];
    if ($ver == 1){
        $secretary_verify = (int)$_POST['num_money'];
    }else{
        $secretary_verify = -1;
    }
    $secretary_comment = mysqli_real_escape_string($conn,$_POST['secretary_comment']);
    $secretary_sign = mysqli_real_escape_string($conn,$_POST['secretary_sign']);
    $myarr = array($secretary_verify, $secretary_comment, $secretary_sign);
    updateJob($id,$level,$myarr);
    $msg="Message updateded";
}else{
    $msg= "Message title cannot be empty";
}
header("Location: todoListView.php?m=$msg");
?>
  
