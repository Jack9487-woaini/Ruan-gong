<?php
require_once("dbconnect.php");
function adduser($userName, $passWord, $level, $myname) {
	global $conn;
	$sql = "insert into user (loginID,password, level, realname) values ('$userName', '$passWord','$level','$myname');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}
function getUserinfo($userName, $passWord){
    global $conn;
    $userName = mysqli_real_escape_string($conn,$userName);
    $level = 0;
    $myname ="";
    $sql = "SELECT password,level,realname FROM user WHERE loginID='$userName'";
    if ($result = mysqli_query($conn,$sql)) {
        if ($row=mysqli_fetch_assoc($result)) {
            if ($row['password'] == $passWord) {
                
                //keep the user ID in session as a mark of login
                //$_SESSION['uID'] = $row['id'];
                //provide a link to the message list UI
                $level = $row['level'];
                $myname = $row['realname'];
                
            }
        }
    }
    $myarr = array($level,$myname);
    return $myarr ;
}
function checkUserIDPwd($userName, $passWord) {
	global $conn;
$userName = mysqli_real_escape_string($conn,$userName);
$isValid = false;

$sql = "SELECT password FROM user WHERE loginID='$userName'";
if ($result = mysqli_query($conn,$sql)) {
	if ($row=mysqli_fetch_assoc($result)) {
		if ($row['password'] == $passWord) {
			//keep the user ID in session as a mark of login
			//$_SESSION['uID'] = $row['id'];
			//provide a link to the message list UI
			$isValid = true;
		}
	}
}
return $isValid;
}



function getUserPwd() {
	global $conn;
	$sql = "select * from user;";
	$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
	return $result;
}

function setUserPassword($userName){
		return false;
}

?>










