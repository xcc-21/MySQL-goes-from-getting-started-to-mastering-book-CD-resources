<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
session_start();
$username=$_POST[username];
$userpwd=md5(trim($_POST[userpwd]));
include_once("../conn/conn.php");
$sql=mysql_query("select usernc from tb_user where usernc='".$username."' and pwd='".$userpwd."' and usertype=2",$conn);
$info=mysql_fetch_array($sql);
if($info==false){
  echo "<script>alert('�Բ���,�û����������������!');history.back();</script>";
  exit;
}else{
  session_register("admin_nc");
  $_SESSION["admin_nc"]=$username; 
  echo "<script>window.location.href='default.php';</script>";
}
?>