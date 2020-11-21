<?php

session_start();
require("userModel.php");
require("dbconnect.php");
if (! isset($_SESSION['uID']) or $_SESSION['uID']<="") {
	header("Location: loginForm.php");
} 

if ($_SESSION['level'] == 1){
    echo "身分:學生";
} else if ($_SESSION['level'] == 2){
    echo "身分:導師";
} else if ($_SESSION['level'] == 3){
    echo "身分:秘書";
} else if ($_SESSION['level'] == 4){
    echo "身分:校長";
}    
    
require("todoModel.php");
if (isset($_GET['m'])){
	$msg="<font color='red'>" . $_GET['m'] . "</font>";
} else {
	$msg="Welcome!!!";
}
$myname = $_SESSION['uID'];
$realname = $_SESSION['myname'];

$result = getJobList($_SESSION['level'],$realname);
$jobStatus = array('未完成','已完成','已結案','已取消');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>申請表</title>
</head>

<body>
<hr />
<div><?php echo $msg; ?></div><hr>
<table width="1100" border="1">
  <tr>
    <td>id</td>
    <td>姓名</td>
    <td>學號</td>
    <td>父親</td>
    <td>母親</td>
    <td>申請補助種類</td>
    <td>導師訪視說明</td>
    <td>導師簽章</td>
    <td>審核結果</td>
    <td>審查意見</td>
    <td>秘書簽章</td>
    <td>校長簽核</td>
    <td>審查狀況</td>
    <td>功能區</td>
  </tr>
<?php

if (! $result) {
    echo "no data found!";
}else{
    while ($rs = mysqli_fetch_array($result)) {
        echo "<tr><td>" . $rs['id'] . "</td>";
        echo "<td>{$rs['name']}</td>";
        echo "<td>" , $rs['sID'], "</td>";
        echo "<td>" , $rs['father'], "</td>";
        echo "<td>" , $rs['mother'], "</td>";
        echo "<td>" , $rs['family_status'], "</td>";
        echo "<td>" , $rs['mentor_comment'], "</td>";
        echo "<td>" , $rs['mentor_sign'], "</td>";
        if ($rs['secretary_verify']>0){
            echo "<td>補助" , $rs['secretary_verify'], "元</td>";
        }else if($rs['secretary_verify']==-1){
            echo "<td>未符合補助條件</td>";
        }else{
            echo "<td></td>";
        }
        echo "<td>" , $rs['secretary_comment'], "</td>";
        echo "<td>" , $rs['secretary_sign'], "</td>";
        if ($rs['principal_sign'] == 1){
            echo "<td>" , "決行", "</td>";
        }else if($rs['principal_sign'] == 2){
            echo "<td>" , "否決", "</td>";
        }else{
            echo "<td>" , " ", "</td>";
        }
        
        if ($rs['form_status'] == 1){
            echo "<td>" , "導師簽註意見中", "</td>";
        }else if($rs['form_status'] == 2){
            echo "<td>" , "秘書簽註意見中", "</td>";
        }else if($rs['form_status'] == 3){
            echo "<td>" , "校長簽核中", "</td>";
        }else if($rs['form_status'] == 4){
            echo "<td>" , "結案", "</td>";
        }
        echo "<td><a href='checkdet.php?id={$rs['id']}'>申請表詳細狀況</a><br>";
        if ($_SESSION['level'] == 2 && $rs['form_status'] == 1){
            echo  "<a href='Th_editform.php?id={$rs['id']}'>簽名與填寫意見</a><br>". "</td></tr>";
        } else if ($_SESSION['level'] == 3 &&$rs['form_status'] == 2){
            echo "<a href='Th_editform.php?id={$rs['id']}'>審核</a>". "</td></tr>";
        } else if ($_SESSION['level'] == 4 && $rs['form_status'] == 3){
            echo "<a href='todoSetControl.php?act=finish&id={$rs['id']}'>決行</a><br>";
            echo "<a href='todoSetControl.php?act=reject&id={$rs['id']}'>否決</a>". "</td></tr>";
        }
    }
}

?>
</table>
<?php
    if ($_SESSION['level'] == 1){
        echo '<a href="todoAddForm.php">申請</a> <br>';
    }
?>
<a href="loginForm.php">登出</a> <br>
</body>
</html>
