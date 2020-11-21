<?php
session_start();
require("dbconnect.php");
require("todoModel.php");

$msgID=(int)$_GET['id'];
$msgID = 1;
$sql= "SELECT * FROM form_info where id=$msgID";
$result = mysqli_query($conn,$sql);

while (	$rs=mysqli_fetch_assoc($result)) {
    $student=$rs['name'];
    $sid=$rs['sID'];
    $dad=$rs['father'];
    $mom=$rs['mother'];
    $help_money=$rs['family_status'];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>ADD 申請表</h1>
<form method="post" action="AddForm.php">
    <h1>貧困學生補助經費申請表</h1>
    申請人（學生）:<input name="student" type="student" id="student" value =<?php echo $student;?> readonly="readonly">
    學號:<input name="sid" type="sid" id="sid" value =<?php echo $sid;?> readonly="readonly"><hr>
    <h3>家庭狀況</h3>
    <p>父(姓名):</p><input name="dad_name" type="dad_name" id="dad_name" value =<?php echo $dad;?> readonly="readonly">
    <p>母(姓名):</p><input name="mom_name" type="mom_name" id="mom_name" value =<?php echo $mom;?> readonly="readonly">
    <hr>
    <label for="help_money">申請補助種類</label>
    <input name="help_money" type="help_money" id="help_money" value =<?php echo $help_money;?> readonly="readonly">1(低收入戶)、2(中低收入戶)、3(家庭突發因素)
    <hr>
    <br>
    導師訪視說明: <input name="teacher_hi_reason" type="teacher_hi_reason" id="teacher_hi_reason">
    <br>
    導師簽章: <input name="teacher_sign" type="teacher_sign" id="teacher_sign">
    <br>
    <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
</body>
</html>