<?php 
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
session_start();					//��ʼ��һ��session����
$xym=$_POST[xym];						//��ȡ$_POST�ύ��ֵ
if($xym!=$_SESSION["autonum"]){			//�ж���֤���Ƿ���ȷ
	echo "<script>alert('Ч�����������');history.back();</script>";
 	exit;
}
$title=$_POST["title"];					//��ȡ������Ϣ�ı���
$content=$_POST["content"];				//��ȡ������Ϣ������
$type=$_POST["type"];					//��ȡ������Ϣ������
include_once("conn/conn.php");			//�����ݿ⽨������
$sql=mysql_query("select id from tb_user where usernc='".$_SESSION["unc"]."'",$conn);	//��ȡ���ݿ�������
$info=mysql_fetch_array($sql);			//��ȡ������е�����
$userid=$info["id"];
//�����ݿ����������
if(mysql_query("insert into tb_leaveword(userid,type,title,content,createtime) values('$userid','$type','$title','$content','".date("Y-m-j H:i:s")."')",$conn)){
	echo "<script>alert('���Է���ɹ���');history.back();</script>";
}else{
	echo "<script>alert('���Է���ʧ�ܣ�');history.back();</script>";
}
?>
