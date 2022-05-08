<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>连接数据库</title>
</head>

<body>
<?php
$conn=mysql_connect("localhost","root","root");		//连接数据库服务器
mysql_select_db("db_database21",$conn);				//连接db_database21数据库
mysql_query("set names utf8");						//设置数据库编码格式
?>
</body>
</html>
