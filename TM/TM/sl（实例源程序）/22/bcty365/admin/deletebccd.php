<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
$id=$_GET[id];
include("../conn/conn.php");
$sql=mysql_query("select * from tb_bccd where id='".$id."'",$conn);
$info=mysql_fetch_array($sql);
if(mysql_query("delete from tb_bccd where id='".$id."'",$conn))
{
 @unlink(".".substr($info[imageaddress],7,strlen($info[imageaddress])-7));
 
  echo "<script>window.location.href='default.php?htgl=�༭��̴ʵ�';</script>";

}
else
{
 echo "<script>alert('��Ƶɾ��ʧ��!');history.back();</script>";
}
?>