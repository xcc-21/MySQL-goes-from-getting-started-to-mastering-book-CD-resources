<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
include_once("../conn/conn.php");
if(mysql_query("delete from tb_soft where id='".$_GET[id]."'",$conn)){
  
  echo "<script>alert('���������ɾ���ɹ�!');history.back();</script>";

}else{

  echo "<script>alert('���������ɾ��ʧ��!');history.back();</script>";
}


?>