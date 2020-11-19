<?php
session_start();
require("dbconnect.php");
$msgID=(int)$_GET['id'];
$sql= "SELECT * FROM todo where id=$msgID";
$result = mysqli_query($conn,$sql);

while (	$rs=mysqli_fetch_assoc($result)) {
    $title=$rs['title'];
    $content=$rs['content'];
    $applicant=$rs['applicant'];
    $importance=$rs['importance'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>Edit New Message</h1>
<form method="post" action="editMessage.php">
      Message ID: <input name="id" type="text" id="id" value=<?php echo $msgID;?> > <br>
      
      Message Title: <input name="title" type="text" id="title" value=<?php echo $title;?> > <br>

      Message Content: <input name="content" type="text" id="content" value=<?php echo $content;?> > <br>
      Message Applicant: <input name="applicant" type="text" id="applicant" value=<?php echo $applicant;?> > <br>
      
	  Message Importance: <input name="importance" type="text" id="importance" value=<?php echo $importance;?> > <br>請輸入重要性代碼:緊急=3、重要=2、一般=1
      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
</body>
</html>
