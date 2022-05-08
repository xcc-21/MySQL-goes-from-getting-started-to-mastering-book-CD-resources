<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>对查询结果进行降序排列输出</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style></head>

<body>

<?php
include("conn.php");						//包含conn.php文件
if(!isset($_POST['Submit2'])){				//判断按钮事件为空时
	$select=mysql_query("select * from tb_book",$conn);		//显示数据表中所有记录
	$rows=mysql_fetch_array($select);
}else{										//否则按id进行降序排列，并获取返回值
	$select=mysql_query("select * from tb_book order by id desc",$conn);
	$rows=mysql_fetch_array($select);
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
	do{														//使用do while循环
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
	}while($rows=mysql_fetch_array($select));				//执行降序排列操作
?>


      </table>
        <label> 
        <div align="center"><br />
         
          <label>
          <input type="submit" name="Submit2" value="降序排列" />
          </label>
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
