<?php
$host = "127.0.0.1";     //MySQL数据库服务器
$userName = "root";     //用户名
$password = "root";     //密码
$dbName = "db_database21";    //数据库名

$connID = mysql_connect($host, $userName, $password);     //连接MySQL数据库
mysql_select_db($dbName, $connID);
mysql_close($connID);
mysql_select_db($dbName, $connID);
?>