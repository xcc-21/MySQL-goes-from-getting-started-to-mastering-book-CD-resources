<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
include_once("../conn/conn.php");
$id=$_GET[id];
if(mysql_query("delete from tb_bb where id='".$id."'",$conn)){
  echo "<script>alert('��̴ʵ�汾ɾ���ɹ���');history.back();</script>";
}else{
 echo "<script>alert('��̴ʵ�汾ɾ��ʧ��');history.back();</script>";
}


?>