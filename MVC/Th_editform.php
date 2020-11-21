<?php
session_start();
require("dbconnect.php");
require("todoModel.php");
$realname = $_SESSION['myname'];
$id=(int)$_GET['id'];
$result = getJobDetail($id);
while ($rs = mysqli_fetch_array($result)) {
    $student=$rs['name'];
    $sid=$rs['sID'];
    $dad=$rs['father'];
    $mom=$rs['mother'];
    $help_money=$rs['family_status'];
    $mentor_comment = $rs['mentor_comment'];
    $mentor_sign=$rs['mentor_sign'];
    $secretary_verify=$rs['secretary_verify'];
    $secretary_comment=$rs['secretary_comment'];
    $secretary_sign=$rs['secretary_sign'];
    $principal_sign=$rs['principal_sign'];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>申請表</h1>
<form method="post" action="Updateform.php">
    <input name="id" type="id" value=<?php echo $id;?>>
    <h1>貧困學生補助經費申請表</h1>
    申請人（學生）:<input name="student" type="student" id="student" value =<?php echo $student;?> readonly="readonly">
    學號:<input name="sid" type="sid" id="sid" value =<?php echo $sid;?> readonly="readonly"><hr>
    <h3>家庭狀況</h3>
    <p>父(姓名):</p><input name="dad_name" type="dad_name" id="dad_name" value =<?php echo $dad;?> readonly="readonly">
    <p>母(姓名):</p><input name="mom_name" type="mom_name" id="mom_name" value =<?php echo $mom;?> readonly="readonly">
    <hr>
    <label for="help_money">申請補助種類:</label>
    <input name="help_money" type="help_money" id="help_money" value =<?php echo $help_money;?> readonly="readonly">1(低收入戶)、2(中低收入戶)、3(家庭突發因素)
    <hr>
    <br>
    <?php
    if ($_SESSION['level'] == 1){
        echo "";
    } else if ($_SESSION['level'] == 2){
        echo '導師訪視說明: <input name="mentor_comment" type="mentor_comment" id="mentor_comment">
        <br>
        導師簽章: <input name="mentor_sign" type="mentor_sign" id="mentor_sign" value=',"$realname",'>';
    } else if ($_SESSION['level'] == 3){
        echo '<h3>導師</h3><hr>導師訪視說明: <input name="mentor_comment" type="mentor_comment" id="mentor_comment" value=',"$mentor_comment",' readonly="readonly">
        <br>';
        echo '導師簽章: <input name="mentor_sign" type="mentor_sign" id="mentor_sign" value=',"$mentor_sign",' readonly="readonly"><br>';
        echo '<h3>秘書審核</h3><hr>
        審核結果:<br><input type ="radio" value="1" name="money">准予補助<input name="num_money">元<br>
        <input type ="radio" value="2" name="money">未符合補助條件<br>
        審查意見: <input name="secretary_comment" ><br>
        秘書簽章: <input name="secretary_sign"value=',"$realname",'><br/>';
    } else if ($_SESSION['level'] == 4){
        echo '導師訪視說明: <input name="mentor_comment" type="mentor_comment" id="mentor_comment" value=',"$mentor_comment",' readonly="readonly">
        <br>';
        echo '導師簽章: <input name="mentor_sign" type="mentor_sign" id="mentor_sign" value=',"$mentor_sign",' readonly="readonly">
        <br>';
        echo '<h3>秘書審核</h3>';
        if ($secretary_verify >0){
            echo '審核結果:<br>准予補助<input name="money" value=',$secretary_verify,'readonly="readonly">元<br>';
        }else{
            echo '<input name="no_support" readonly="readonly" value = "未符合補助條件"
            <hr>';
            echo '審查意見: <input name="secretary_comment" value=', "$secretary_comment",'readonly="readonly"><br>';
            echo '秘書簽章: <input name="secretary_sign" value=', "$secretary_sign",'readonly="readonly">';
            echo '<h3>校長審核</h3>';
        }
        if ($principal_sign == 1){
            echo '校長簽核: <input name="principal_sign" value="決行" readonly="readonly">';
        }else if($principal_sign == 0){
            echo '校長簽核: <input name="principal_sign" value="否決" readonly="readonly">';
        }else{
            echo '校長簽核: <input name="principal_sign" value="" readonly="readonly">';
        }
    }  
    ?>
    <a href="todoListView.php">返回</a> 
    <input type="submit" name="Submit" value="送出" />
    </form>
  </tr>
</table>
</body>
</html>