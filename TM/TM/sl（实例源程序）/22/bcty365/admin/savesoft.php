<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
include_once("../conn/conn.php");
$softname=$_POST[softname];
$content=$_POST[content];
$createtime=date("Y-m-j H:i:s");


if(is_dir("./soft")==false)
 {
    mkdir("./soft");
 }
 
$link=date("YmjHis");
$path=$link.mt_rand(1000000,9999999).strstr($_FILES["address"]["name"],".");
$address="./soft/".$path;
move_uploaded_file($_FILES["address"]["tmp_name"],$address);
$address="./admin/soft/".$path;
$query=mysql_query("insert into tb_soft(softname,content,addtime,address,click) values('$softname','$content','$createtime','$address','0')",$conn);

if($query){
 echo "<script>alert('���������ӳɹ���');history.back();</script>";

}else{

 echo "<script>alert('����������ʧ�ܣ�');history.back();</script>";

}


?>