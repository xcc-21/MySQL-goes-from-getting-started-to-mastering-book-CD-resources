<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
</body>
</html>
<?php
include("conn.php");				//包含conn.php文件
if(isset($_POST['id']) and isset($_POST['Submit']) and $_POST['Submit']=="保存"){
	$update=mysql_query("update tb_news set name='".$_POST['name']."',news='".$_POST['news']."' where id='".$_POST['id']."'",$conn);
	if($update){
		echo  "<script> alert('修改成功!'); window.location.href='index.php'</script>";
	}else{
		echo  "<script> alert('修改失败!'); window.location.href='index.php'</script>";
	}
}
?>
