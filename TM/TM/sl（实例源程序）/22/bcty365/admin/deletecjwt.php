<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
$id=$_GET[id];
include_once("../conn/conn.php");
if(mysql_query("delete from tb_cjwt where id='".$id."'",$conn)){
   
echo "<script>alert('��������ɾ���ɹ���');history.back();</script>";
}else{
echo "<script>alert('��������ɾ��ʧ�ܣ�');history.back();</script>";
}

?>