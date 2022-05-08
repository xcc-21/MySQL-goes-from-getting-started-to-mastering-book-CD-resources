<?php
$host = "127.0.0.1";			//MySQL服务器地址
$userName = "root";			//用户名
$password = "root";			//密码
if ($connID = mysql_connect($host, $userName, $password)){
     //建立与MySQL数据库的连接，并弹出提示对话框
    echo "<script language='javascript'>alert('数据库连接成功！');</script>";
}else{
    echo "<script language='javascript'>alert('数据库连接失败！');</script>";
}
?>
