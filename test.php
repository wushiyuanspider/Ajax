<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>如何通过ajax从数据库读取信息</title>
	<script>
		function showSel(val) {
			alert(val);
		}
	</script>
</head>
<body>
	请选择一位管理员：
	<select onchange="showSel(this.value)">
		<option>--请选择--</option>
		<option>admin</option>
		<option>user1</option>
		<option>user2</option>
	</select>
</body>
</html>