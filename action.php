<?php
	require("config.php");
	connectSer();
	// echo $_GET['name'];
	$sql = "select * from em_admin where name = '{$_GET['name']}'";
	$result = mysql_query($sql);
	$res_arr = mysql_fetch_assoc($result);
	if(!empty($res_arr)) {
		echo "<table width='800' border='1' cellspacing=0>";
		echo "<tr>";
		foreach ($res_arr as $key => $value) {
			echo "<th>{$key}</th>";
		}
		echo "</tr>";
		echo "<tr>";
		foreach ($res_arr as $key => $value) {
			echo "<td>{$value}</td>";
		}
		echo "</tr>";
		echo "</table>";
	}
?>