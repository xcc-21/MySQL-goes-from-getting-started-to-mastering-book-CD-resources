<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
session_start();
include_once("conn/conn.php");
$ddnumber=substr(date("YmdHis"),2,8).mt_rand(100000,999999);
$sql=mysql_query("select * from tb_city where id='".$_POST["city"]."'",$conn);
$info=mysql_fetch_array($sql);
if($shfs=="1"){
 $yprice=$info[pt];
 $shfs="��ͨ�ʵ�";
}elseif($shfs=="2"){
 $yprice=$info[kd];
 $shfs="�����ؿ�ר��EMS";
}

$array=explode("@",$_SESSION["goodsid"]);
$arraynum=explode("@",$_SESSION["goodsnum"]);
$totalprice=0;
 for($i=0;$i<count($array);$i++){
	if($array[$i]!=""){
	 $sqlcart=mysql_query("select * from tb_bccd where id='".$array[$i]."'",$conn);
	 $infocart=mysql_fetch_array($sqlcart);
     
	 $totalprice+=$infocart["price"]*$arraynum["$i"];
	}
}
$totalprice=$totalprice+$yprice;
if(mysql_query("insert into tb_dd(ddnumber,recuser,sex,address,yb,qq,email,mtel,gtel,shfs,spc,slc,yprice,totalprice,createtime,cityid) values('".$ddnumber."','".$_POST["recuser"]."','".$_POST["sex"]."','".$_POST["address"]."','".$_POST["yb"]."','".$_POST["qq"]."','".$_POST["email"]."','".$_POST["mtel"]."','".$_POST["gtel"]."','".$shfs."','".$_SESSION["goodsid"]."','".$_SESSION["goodsnum"]."','".$yprice."','".$totalprice."','".date("Y-m-d H:i:s")."','".$_POST["city"]."')",$conn)){
session_unregister("goodsid");
session_unregister("goodsnum");
echo "<script>window.location.href='shopping_dd.php?ddno=".base64_encode($ddnumber)."';</script>";
}else{

echo "<script>alert('������Ϣ����ʧ�ܣ������ԣ�');</script>";

}
?>

