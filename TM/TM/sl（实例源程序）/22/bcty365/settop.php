<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
include_once("conn/conn.php");
$sql=mysql_query("select top from tb_bbs where id='".$_GET["id"]."'",$conn);
$info=mysql_fetch_array($sql);
if($info[top]==1){
  mysql_query("update tb_bbs set top=0 where id='".$_GET["id"]."'",$conn);
}elseif($info[top]==0){
  mysql_query("update tb_bbs set top=1 where id='".$_GET["id"]."'",$conn);
}
echo "<script>alert('�������óɹ���');history.back();</script>";
?>
