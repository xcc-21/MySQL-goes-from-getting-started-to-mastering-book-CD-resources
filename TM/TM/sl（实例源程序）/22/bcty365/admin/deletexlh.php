<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
include_once("../conn/conn.php");
if(mysql_query("delete from tb_xlh where id='".$_GET[id]."'",$conn)){
  echo "<script>alert('���к�ɾ���ɹ���');history.back();</script>";
}else{
   echo "<script>alert('���к�ɾ��ʧ�ܣ�');history.back();</script>";
}
?>