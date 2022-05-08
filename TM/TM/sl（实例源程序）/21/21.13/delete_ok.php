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
//$id = $_GET['id'];	
include("conn.php");									//包含conn.php文件
$delete=mysql_query("delete from tb_news where id='".$_GET['id']."'",$conn);		//执行删除操作
	if($delete){
		echo  "<script> alert('删除成功!'); window.location.href='delete.php'</script>";
	}else{
		echo  "<script> alert('删除失败!'); window.location.href='delete.php'</script>";
	}

?>
