<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
session_start();
session_register("goodsid");
session_register("goodsnum");
if($_SESSION["goodsid"]=="" && $_SESSION["goodsnum"]==""){
    $_SESSION["goodsid"]=$_GET["id"]."@";
	$_SESSION["goodsnum"]="1@";
}else{

     $array=explode("@",$_SESSION["goodsid"]);
	 if(in_array($_GET["id"],$array)){
	   echo "<script>alert('�ñ�̴ʵ��Ѿ������빺�ﳵ��');history.back();</script>";
	   exit;
	 }

    
    $_SESSION["goodsid"].=$_GET["id"]."@";
    $_SESSION["goodsnum"].="1@";
}
echo "<script>window.location.href='shopping_cart.php';</script>";
?>