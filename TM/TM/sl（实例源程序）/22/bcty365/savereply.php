<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
session_start();
$title=$_POST[reply_title];
$content=$_POST[content1];
if($title==""){
 echo "<script>alert('������ظ����⣡');history.back();</script>";
 exit;
}

if($content==""){
 echo "<script>alert('������ظ����ݣ�');history.back();</script>";
 exit;
}


include_once("conn/conn.php");
$bbsid=$_POST[bbsid];
$sql0=mysql_query("select id from tb_user where usernc='".$_SESSION["unc"]."'",$conn);
$info0=mysql_fetch_array($sql0);
$userid=$info0[id];
$createtime=date("Y-m-j H:i:s");
 $link=date("YmjHis");
if($_FILES['bbs_photo']["name"]==true){         //�ϴ�ͼƬ,�ж��ļ��Ƿ����
  $photo_name=strtolower(stristr($_FILES["bbs_photo"]["name"],"."));                  //��ȡͼƬ�ĺ�׺��,���ҽ��ַ�ת����Сд
  if($photo_name!=".gif" & $photo_name!=".jpg" & $photo_name!=".jpeg" ){ //�ж��ļ���ͼƬ�ĸ�ʽ�Ƿ����Ҫ��
    echo "<script>alert('���ϴ���ͼƬ��ʽ����ȷ!');history.back();</script>";
  }else{
    $paths1=$link.mt_rand(1000000,9999999).$photo_name;                                //����ͼƬ������     
    $photos="./upfile/".$paths1;                                                       //����ͼƬ�Ĵ洢·��
    move_uploaded_file($_FILES['bbs_photo']["tmp_name"],$photos);                      //��ͼƬ�洢��ָ�����ļ�����
if(mysql_query("insert into tb_reply(userid,bbsid,title,content,createtime,photo) values ('$userid','$bbsid','$title','$content','$createtime','$photos')",$conn))
		   {
		      mysql_query("update tb_bbs set lastreplytime='".$createtime."'",$conn);
			  echo "<script>alert('�ظ�����ɹ�!');history.back();</script>";
              mysql_close($conn);
              exit;
		   } }
}else{
if(mysql_query("insert into tb_reply(userid,bbsid,title,content,createtime) values ('$userid','$bbsid','$title','$content','$createtime')",$conn))
		   {
		      mysql_query("update tb_bbs set lastreplytime='".$createtime."'",$conn);
			  echo "<script>alert('�ظ�����ɹ�!');history.back();</script>";
              mysql_close($conn);
              exit;
		   } 


}
?>