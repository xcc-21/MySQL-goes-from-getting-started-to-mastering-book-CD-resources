<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加新闻</title>
</head>
<?php
$conn=mysql_connect("localhost","root","root");
mysql_select_db("db_database21",$conn);
mysql_query("set names uft8");
$name=$_POST['name'];
$news=$_POST['news'];

if(isset($_POST['submit'])  and $_POST['name']!=null and $_POST['news']!=null and $_POST['submit']=="提交"){
	$insert=mysql_query("insert into tb_news(name,news) values('".$_POST['name']."','".$_POST['news']."')");
	if($insert){
	echo "<script> alert('发表成功!'); window.location.href='look.php'</script>";
}else{
	echo "<script> alert('发表失败!'); window.location.href='insert.html'</script>";
	}
}

?>