<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
$ddnumber=base64_decode($_GET["ddno"]);
include_once("conn/conn.php");
if(mysql_query("delete from tb_dd where ddnumber='".$ddnumber."'",$conn)){
  echo "<script>window.location.href='index.php';</script>";
}else{
  echo "<script>alert('����ɾ��ʧ��,�����ԣ�');history.back();</script>";
}
?>