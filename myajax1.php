<?php
	require("config.php");
	connectSer();
	$sql = "select * from em_admin";
	$res_arr = getAll($sql);
	// p($res_arr);
	// die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>如何通过ajax从数据库读取信息</title>
	<style type="text/css">
		*{
			font-size: 14px;
		}
		#msg{
			color: blue;
			display: block;
			margin-top: 10px;
		}
	</style>
	<script type="text/javascript" src="Ajax.js"></script>
	<script type="text/javascript">
		function showMsg(val) {
			ajax("action.php?name="+val, function(data) {
				// alert(data);
				document.getElementById("admin_msg").innerHTML = data;
			});
		}
	</script>
</head>
<body>
	请选择一位管理员：
	<select onchange="showMsg(this.value)">
		<option>--请选择--</option>
		<?php foreach($res_arr as $value) {?>
		<option><?php echo $value['name']?></option>
		<?php }?>
	</select><br />
	<span id='msg'>管理员的信息讲在此处列出：</span>
	<div id="admin_msg"></div>
</body>
</html>
