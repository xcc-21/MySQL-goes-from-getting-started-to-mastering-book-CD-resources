<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
 include_once("conn/conn.php");
 $truepwd=$_POST[userpwd1];
 $pwd=md5($truepwd);
 if(mysql_query("update tb_user set pwd='$pwd' where id='$userid'",$conn)){
    echo "<script>alert('������ĳɹ�!');history.back();</script>";
  }else{
    echo "<script>alert('�������ʧ��!');history.back();</script>";
  }
 mysql_close($conn);
?>