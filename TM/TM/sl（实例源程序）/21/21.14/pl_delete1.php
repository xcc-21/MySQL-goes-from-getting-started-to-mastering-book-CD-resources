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
include("conn.php");					//包含conn.php文件
if(isset($_POST['Submit']) and $_POST['Submit']=="删除" and $_POST['checkbox']!=""){  //判断是否执行删除操作
	for($i=0;$i<count($_POST['checkbox']);$i++){				//遍历复选框获取到的新闻id序号
		$sql=mysql_query("delete from tb_news where id='".$_POST['checkbox'][$i]."'",$conn);	//执行删除操作
	}
	if($sql){
		echo  "<script> alert('删除成功!'); window.location.href='pl_delete.php'</script>";
	}else{
		echo  "<script> alert('删除失败!'); window.location.href='pl_delete.php'</script>";
	}
}else{
	echo  "<script> alert('请选择要删除的内容!'); window.location.href='pl_delete.php'</script>";
}
?>
