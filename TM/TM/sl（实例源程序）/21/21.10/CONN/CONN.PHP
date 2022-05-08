<?php
$conn = mysql_connect("localhost", "root", "root") or die(
"连接数据库服务器失败！" . mysql_error());
mysql_select_db("db_database21", $conn); //选择数据库db_database21
mysql_query("set names utf8"); //设置数据库编码格式utf8
?>
