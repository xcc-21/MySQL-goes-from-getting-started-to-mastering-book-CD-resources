<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
include_once("../conn/conn.php");
$gg_title=$_POST[title];
$gg_content=$_POST[content];
$addtime=date("Y-m-j H:i:s");
$query=mysql_query("insert into tb_tell(title,content,createtime) values('$gg_title','$gg_content','$addtime')",$conn);
 if($query==true){ 
   echo "<script>alert('������ӳɹ���');history.back();</script>";

}else{
   
   echo "<script>alert('�������ʧ�ܣ�');history.back();</script>";

}


?>