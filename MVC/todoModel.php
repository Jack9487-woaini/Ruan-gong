<?php
require_once("dbconnect.php");

function addJob($student,$sid, $dad,$mom,$help_money) {
	global $conn;
	$sql = "insert into form_info (name,sID,father,mother,family_status,mentor_comment,mentor_sign,secretary_verify,secretary_comment,secretary_sign,principal_sign,form_status) values ('$student','$sid', '$dad','$mom','$help_money',NULL,NULL,NuLL,NULL,NULL,NULL,1);";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

function cancelJob($jobID) {
	global $conn;
	$sql = "update form_info set principal_sign = 0,form_status=4  where id=$jobID and status <> 2;";
	mysqli_query($conn,$sql);
	//return T/F
}

function updateJob($id,$level,$myarr) {
	global $conn;
	if($level == 2){
        $sql = "update form_info set mentor_comment='{$myarr[0]}', mentor_sign='{$myarr[1]}',form_status=2 where id=$id;";
        mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
        
    } else if($level == 3){
        $sql = "update form_info set secretary_verify='{$myarr[0]}', secretary_comment='{$myarr[1]}', secretary_sign='{$myarr[2]}',form_status=3 where id=$id;";
        
        mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
    }
}

function getJobList($level,$name) {
	global $conn;
    $name = mysqli_real_escape_string($conn,$name);
	if ($level > 1) {
		$sql = "select * from form_info order by form_status desc;";
	} else {
		$sql = "select * from form_info where name = '$name';";
	}
	$result=mysqli_query($conn,$sql);
	return $result;
}

function getJobDetail($id) {
	global $conn;
	if ($id == -1) { //-1 stands for adding a new record
		$rs=[
			"id" => -1,
			"title" => "new title",
			"content" => "job description",
			"urgent" => "一般"
		];
	} else {
		$sql = "select * from form_info where id = $id;";
		$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
		
	}
	return $result;
}

function setFinished($jobID) {
	global $conn;
	$sql = "update form_info set principal_sign = 1, form_status=4 where id=$jobID ;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
	
}

function rejectJob($jobID){
	global $conn;
	$sql = "update form_info set principal_sign = 2, form_status=4 where id=$jobID ;";;
	mysqli_query($conn,$sql);
}

function setClosed($jobID) {
	global $conn;
	$sql = "update form_info set status = 2 where id=$jobID and status = 1;";
	mysqli_query($conn,$sql);
}


?>