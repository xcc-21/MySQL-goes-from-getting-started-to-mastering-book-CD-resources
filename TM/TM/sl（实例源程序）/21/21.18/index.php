<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查询图书信息表中的前3条记录</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style></head>

<body>

<?php
include("conn.php");			//包含conn.php文件
if(isset($_POST['Submit']) and $_POST['Submit']=="查询"){			//判断用户是否执行查询操作
	$select=mysql_query("select * from tb_book1 where id limit 3 ",$conn);		//查询数据库中前三条记录
}else{
	$select=mysql_query("select * from tb_book1",$conn);		//查询所有记录

}
?>
<form id="form1" name="form1" method="post" action="">
  <table id="__01" width="800" height="670" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="3"><img src="images/book_01.gif" width="800" height="328" alt="" /></td>
    </tr>
    <tr>
      <td rowspan="2"><img src="images/book_02.gif" width="116" height="342" alt="" /></td>
      <td width="598" height="243" valign="top"><table width="595" height="71" align="center">
        <tr>
          <td width="49"><div align="center">图书序号</div></td>
          <td width="199"><div align="center">书名</div></td>
          <td width="74"><div align="center">作者</div></td>
          <td width="123" valign="middle"><div align="center">出版社</div></td>
          <td width="83"><div align="center">出版时间</div></td>
          <td width="39"><div align="center">价格</div></td>
        </tr>
<?php
	while($rows=mysql_fetch_array($select)){			//使用while循环查询结果
?>
        <tr>
          <td><?php echo $rows['id'];?>&nbsp;</td>			<!--输出id-->
          <td><?php echo $rows['bookname'];?>&nbsp;</td>		<!--输出书名-->
          <td><?php echo $rows['maker'];?>&nbsp;</td>			<!--输出作者-->
          <td><?php echo $rows['publisher'];?>&nbsp;</td>			<!--输出出版社-->
          <td><?php echo $rows['issuDate'];?>&nbsp;</td>		<!--输出出版时间-->
          <td><?php echo $rows['price'];?>&nbsp;</td>		<!--输出价格-->
        </tr>
<?php
	}														//结束循环
?>
      </table>
        <label> 
        <div align="center"><br />
                   <input type="submit" name="Submit" value="查询" />
        </div>
        </label></td>
      <td><img src="images/book_04.gif" width="86" height="243" alt="" /></td>
    </tr>
    <tr>
      <td colspan="2"><img src="images/book_05.gif" width="684" height="99" alt="" /></td>
    </tr>
  </table>
</form>
</body>
</html>
