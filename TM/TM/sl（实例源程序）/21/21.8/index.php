<?php
$host = "127.0.0.1";     //MySQL���ݿ������
$userName = "root";     //�û���
$password = "root";     //����
$dbName = "db_database21";    //���ݿ���

$connID = mysql_connect($host, $userName, $password);     //����MySQL���ݿ�
mysql_select_db($dbName, $connID);
mysql_close($connID);
mysql_select_db($dbName, $connID);
?>