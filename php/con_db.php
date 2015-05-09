<?php
	$con = mysql_connect("localhost","root","");
	if(!$con){
		die("Could not Connect Mysql DB");
	}
	mysql_select_db("students",$con);
	mysql_query("set names utf8");
?>