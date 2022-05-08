<?php 
$connID=mysql_connect("localhost","root","root");    //建立与数据库的连接
mysql_select_db("db_database21", $connID);   //选择数据库
mysql_query("set names gbk");    //设置字符集
?>