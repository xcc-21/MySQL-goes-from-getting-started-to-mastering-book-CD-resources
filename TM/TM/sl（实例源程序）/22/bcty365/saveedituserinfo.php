<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
include_once("conn/conn.php");
$usenc=$_POST[usernc];
$truename=trim($_POST[truename]);
$email=trim($_POST[email]);
$sex=$_POST[sex];
$tel=trim($_POST[tel]);
$yb=trim($_POST[yb]);
$qq=trim($_POST[qq]);
$address=trim($_POST[address]);
$question=trim($_POST[question]);
$answer=trim($_POST[answer]);
if(mysql_query("update tb_user set truename='$truename',email='$email',sex='$sex',tel='$tel',yb='$yb',qq='$qq',address='$address',question='$question',answer='$answer' where usernc='".$usernc."'",$conn)){
 echo "<script>alert('ע����Ϣ���ĳɹ���');history.back();</script>";
}else{
 echo "<script>alert('ע����Ϣ����ʧ�ܣ�');history.back();</script>";
}

?>