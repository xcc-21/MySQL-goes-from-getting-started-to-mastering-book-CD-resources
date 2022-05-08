<?php
$host = "127.0.0.1";									//MySQL服务器地址
$userName = "root";									//用户名
$password = "root";									//密码
$dbName = "db_database21";							//数据库
$connID = mysql_connect($host, $userName, $password);		//建立与MySQL数据库服务器的连接
if(mysql_select_db($dbName, $connID)){					//选择数据库
    echo "数据库选择成功！";
}else{
    echo "数据库选择失败！";
}
?>
