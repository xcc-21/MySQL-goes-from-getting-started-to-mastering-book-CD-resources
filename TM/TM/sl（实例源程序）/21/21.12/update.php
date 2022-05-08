<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
</body>
</html>
<form id="form1" name="form1" method="post" action="update_ok.php">
<?php
include("conn.php");		//包含conn.php文件
$arr=mysql_query("select * from tb_news where id='".$_GET['id']."'",$conn);		//定义查询语句
$select=mysql_fetch_array($arr);											//循环输出查询内容
?>
	新闻标题：<input name="name" type="text" size="40" value="<?php echo $select['name'];?>"/><br />
    
    新闻内容：<textarea name="news" cols="40" rows="10"><?php echo $select['news'];?></textarea><br />
    <input type="submit" name="Submit" value="保存" />
    <input type="hidden" name="id" value="<?php echo $select['id'];?>" />
</form>
