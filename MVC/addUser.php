<?php
session_start();
?>
<h1>Create Account Form</h1><hr />
<form method="post" action="addUserForm.php">
    User Name: <input type="text" name="id"><br />
    Password : <input type="password" name="pwd"><br />
    身分: <input type="level" name="level">1(學生),2(導師),3(秘書),4(校長)<br />
    真實姓名 : <input type="myname" name="myname"><br />
    <input type="submit">
</form>