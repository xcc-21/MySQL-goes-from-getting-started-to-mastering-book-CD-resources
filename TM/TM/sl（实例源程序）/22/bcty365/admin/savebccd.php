<?php 
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
include_once("../conn/conn.php");		//�������ݿ�
$bccdname=$_POST[bccdname];					//��ȡPOST�����ύ��ֵ
$owner=$_POST[owner];
$typeid=$_POST[typeid];
$content=$_POST[content];
$samepart=$_POST[samepart];
$addtime=date("Y-m-j H:i:s");				//��ȡ��ǰʱ��
if(is_dir("./bccdimages")==false){			//�ж�ָ�����ļ��Ƿ����
	mkdir("./bccdimages");					//���������,�򴴽�һ���µ��ļ���
} 
$link=date("YmjHis");						//��ȡ��ǰʱ��
//Ϊ�����ύ��������������,�Ե�ǰʱ����������Ϊ����,����ʹ��$_FILES��ȡ������ʵ������,ʹ��strstr������ȡ�ļ��ĺ�׺
$path=$link.mt_rand(1000000,9999999).strstr($_FILES["imageaddress"]["name"],".");
$address="./bccdimages/".$path;				//�����ļ��ϴ���·��
move_uploaded_file($_FILES["imageaddress"]["tmp_name"],$address);		//���ļ��ϴ���ָ�����ļ���
$imageaddress="./admin/bccdimages/".$path;								//��ȡ�ϴ��ļ��ڷ������еĴ洢·��
//�������ύ�����ݴ洢�����ݿ���
$query=mysql_query("insert into tb_bccd(bccdname,owner,typeid,content,samepart,imageaddress,addtime) values('$bccdname','$owner','$typeid','$content','$samepart','$imageaddress','$addtime')",$conn);
if($query==true){ 
	echo "<script>alert('��̴ʵ���ӳɹ���');history.back();</script>";
}else{
	echo "<script>alert('��̴ʵ����ʧ�ܣ�');history.back();</script>";
}
?>