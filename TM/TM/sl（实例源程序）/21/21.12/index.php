<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑新闻</title>

<style type="text/css">
<!--
.STYLE3 {font-size: 18}
body,td,th {
	font-size: 12px;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table id="__01" width="560" height="430" border="0" cellpadding="0" cellspacing="0" align="center">
    <tr>
      <td colspan="3"><img src="images/日历看新闻2背景_01.jpg" width="560" height="96" alt="" /></td>
    </tr>
    <tr>
      <td rowspan="2"><img src="images/日历看新闻2背景_02.jpg" width="55" height="334" alt="" /></td>
      <td width="449" height="293" valign="top" background="images/日历看新闻2背景_03.jpg"><table width="444" border="0">
          <tr>
            <td width="94"><div align="center" class="STYLE1">新闻标题</div></td>
            <td width="264" height="40"><div align="center" class="STYLE1">新闻内容</div></td>
          </tr>



<?php
include("conn.php");									//包含conn.php文件
$arr=mysql_query("select * from tb_news",$conn);			//查询数据
/*使用while语句循环mysql_fetch_array()函数返回的数组*/
while($result=mysql_fetch_array($arr)){
?>
        <tr>
          <td height="25"><?php echo $result['name'];?><!--输出新闻标题-->&nbsp;</td>
          <td><?php echo $result['news'];?>              <!--输出新闻内容-->		</td>
          <td><label>
            <input type="hidden" name="id" value="<?php echo $result['id'];?>" />
            <div align="center"><a href="update.php?id=<?php echo $result['id'];?>">编辑</a></div>
          </label></td>
          </tr>
<?php
  }			//结束while循环
?>	

 </table></td>
      <td rowspan="2"><img src="images/日历看新闻2背景_04.jpg" width="56" height="334" alt="" /></td>
    </tr>
    <tr>
      <td width="449" height="41" background="images/日历看新闻2背景_05.jpg">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>