<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
$id=$_GET[id];
include_once("../conn/conn.php");
if(mysql_query("delete from tb_dd where id='".$id."'",$conn)){
  
  echo "<script>alert('����ɾ���ɹ�!');history.back();</script>";

}else{

  echo "<script>alert('����ɾ��ʧ��!');history.back();</script>";
}


?>