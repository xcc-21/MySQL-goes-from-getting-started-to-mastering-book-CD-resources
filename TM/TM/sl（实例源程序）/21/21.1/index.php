<?php
$host = "127.0.0.1";			//MySQL��������ַ
$userName = "root";			//�û���
$password = "root";			//����
if ($connID = mysql_connect($host, $userName, $password)){
     //������MySQL���ݿ�����ӣ���������ʾ�Ի���
    echo "<script language='javascript'>alert('���ݿ����ӳɹ���');</script>";
}else{
    echo "<script language='javascript'>alert('���ݿ�����ʧ�ܣ�');</script>";
}
?>
