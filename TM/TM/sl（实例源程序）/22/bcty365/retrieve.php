<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
session_start();
$title=$_POST[bbs_title];
$content=$_POST[content1];

if($title==""){
 echo "<script>alert('�������������⣡');history.back();</script>";
 exit;
}

if($content==""){
 echo "<script>alert('�������������ݣ�');history.back();</script>";
 exit;
}

include_once("conn/conn.php");
 $sql=mysql_query("select * from tb_user where usernc='".$_SESSION["unc"]."'",$conn);
 $info=mysql_fetch_array($sql);
 $userid=$info[id];
 $typeid=$_POST[bbs_type];
 $title=$_POST[bbs_title];
 $content=$_POST[content1];
 $head=$_POST[bbs_head];
 //date_default_timezone_set("Asia/Hong_Kong");
 $createtime=date("Y-m-j H:i:s");
 $lastreplytime=$createtime;
 $readtimes=0;
 $link=date("YmjHis");
if($_FILES['bbs_photo']["name"]==true){         //�ϴ�ͼƬ,�ж��ļ��Ƿ����
  $photo_name=strtolower(stristr($_FILES["bbs_photo"]["name"],"."));                  //��ȡͼƬ�ĺ�׺��,���ҽ��ַ�ת����Сд
  if($photo_name!=".gif" & $photo_name!=".jpg" & $photo_name!=".jpeg" ){ //�ж��ļ���ͼƬ�ĸ�ʽ�Ƿ����Ҫ��
    echo "<script>alert('���ϴ���ͼƬ��ʽ����ȷ!');history.back();</script>";
  }else{
    $paths1=$link.mt_rand(1000000,9999999).$photo_name;                                //����ͼƬ������     
    $photos="./upfile/".$paths1;                                                       //����ͼƬ�Ĵ洢·��
    move_uploaded_file($_FILES['bbs_photo']["tmp_name"],$photos);                      //��ͼƬ�洢��ָ�����ļ�����
if(mysql_query("insert into tb_bbs(userid,typeid,title,content,createtime,lastreplytime,head,readtimes,top,photo) values ('".$userid."','".$typeid."','".$title."','".$content."','".$createtime."','".$lastreplytime."','".$head."','".$readtimes."','0','$photos')",$conn))
 {
 mysql_query("update tb_user set pubtimes=pubtimes+1",$conn);
 echo "<script>alert('��������ɹ�!');history.back();</script>";
 mysql_close($conn);
 }
 else
  {
   echo "<script>alert('��������ʧ��!');history.back();</script>";
   mysql_close($conn);
  }}
}else{
if(mysql_query("insert into tb_bbs(userid,typeid,title,content,createtime,lastreplytime,head,readtimes,top) values ('".$userid."','".$typeid."','".$title."','".$content."','".$createtime."','".$lastreplytime."','".$head."','".$readtimes."','0')",$conn))
 {
 mysql_query("update tb_user set pubtimes=pubtimes+1",$conn);
 echo "<script>alert('��������ɹ�!');history.back();</script>";
 mysql_close($conn);
 }
 else
  {
   echo "<script>alert('��������ʧ��!');history.back();</script>";
   mysql_close($conn);
  }

}
?>

