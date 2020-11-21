<?php
require("dbconnect.php");
$title=mysqli_real_escape_string($conn,$_POST['title']);
$content=mysqli_real_escape_string($conn,$_POST['content']);
$applicant=mysqli_real_escape_string($conn,$_POST['applicant']);
$importance=intval(mysqli_real_escape_string($conn,$_POST['importance']));

if ($title) { //if title is not empty
	$sql = "insert into todo (title, content, applicant,importance,status) values ('$title', '$content', '$applicant','$importance',0);";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	echo "Message added";
} else {
	echo "Message title cannot be empty";
}

?>

<a href="boss_listTodo.php">back</a>