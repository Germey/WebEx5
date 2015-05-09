<?php
	include "con_db.php";

	$content = $_POST['content'];
	//构造sql
	$sql = "select * from webgrades where major like '%$content%' or grade like '%$content%' or sid like '%$content%' or name like '%$content%' or score = '$content'";
	$result = mysql_query($sql);
	$res;
	$i = 0;
	while ($row = mysql_fetch_array($result)) {
		$res[$i] = $row;
		$i++;	
	}
	echo json_encode($res);

?>