<?php
	function connectSer() {
		//1.链接数据库服务器
		$link = mysql_connect("localhost", "root", "eleven") or die("数据库链接失败Error：".mysql_errno().":".mysql_error());

		//2.设置字符编码
		mysql_set_charset("utf8");

		//3.选择数据库
		mysql_select_db("emt");

		return $link;

	}
	//原型打印函数
	function p($data) {
		echo '<pre>';
		print_r($data);
		echo '</pre>';
	}

	function getAll($sql,$result_type=MYSQL_ASSOC){
    $result = mysql_query($sql);
    while(@$row=mysql_fetch_array($result,$result_type)) {
    	$rows[]=$row;
    }
    return $rows;  
}
?>