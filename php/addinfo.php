<?php
	include "con_db.php";

	$major = $_POST['major'];
	$grade = $_POST['grade'];
	$sid = $_POST['sid'];
	$name = $_POST['name'];
	$score = $_POST['score'];
	//构造sql
	$sql = "insert into webgrades(major,grade,sid,name,score) values ('$major','$grade','$sid','$name','$score')";
	$result = mysql_query($sql);
	if($result){
		echo "1";
	}else{
		echo "0";
	}
?>


