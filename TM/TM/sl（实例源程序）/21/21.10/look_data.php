<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>输出数据库中存储的二进制图片数据</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 00px;
	margin-right: 0px;
	margin-bottom: 0px;
}

body,td,th {
	font-size: 12px;
	color: #666666;
}
-->
</style>
</head>
<body>
<table width="779" height="712" border="0" align="center"
	cellpadding="0" cellspacing="0" background="images/admin.jpg">
	<tr>
		<td width="196" height="230">&nbsp;</td>
		<td width="564">&nbsp;</td>
		<td width="19">&nbsp;</td>
	</tr>
  <?php
include_once ("conn/conn.php");
$query = mysql_query("select * from tb_book order by id desc", $conn);
$myrow = mysql_fetch_array($query);
?>
  <tr>
		<td height="380">&nbsp;</td>
		<td valign="top">
		<table width="564" border="1" cellpadding="1" cellspacing="1"
			bordercolor="#FFFFFF" bgcolor="#999999">
			<tr>
				<td width="97" height="28" align="right" bgcolor="#FFFFFF">图书名称：</td>
				<td colspan="2" align="left" valign="middle" bgcolor="#FFFFFF"><input
					name="bookname" type="text" id="bookname" size="35"
					value="<?php
    echo $myrow[bookname];
    ?>"></td>
				<td width="194" bgcolor="#FFFFFF">&nbsp;</td>
			</tr>
			<tr>
				<td height="30" align="right" bgcolor="#FFFFFF">作者：</td>
				<td width="177" align="center" valign="top" bgcolor="#FFFFFF"><input
					name="maker" type="text" id="maker" size="25"
					value="<?php
    echo $myrow[maker];
    ?>"></td>
				<td width="73" align="right" valign="middle" bgcolor="#FFFFFF">价格：</td>
				<td bgcolor="#FFFFFF"><input name="price" type="text" id="price"
					size="8" value="<?php
    echo $myrow[price];
    ?>"></td>
			</tr>

			<tr>
				<td height="36" align="right" bgcolor="#FFFFFF">出版时间：</td>
				<td colspan="2" bgcolor="#FFFFFF"><input name="issuDate" type="text"
					id="issuDate" size="30" value="<?php
    echo $myrow[issuDate];
    ?>"></td>
				<td align="center" bgcolor="#FFFFFF">封面预览</td>
			</tr>
			<tr>
				<td height="36" align="right" bgcolor="#FFFFFF">出版社：</td>
				<td colspan="2" bgcolor="#FFFFFF"><input name="publisher"
					type="text" id="publisher" size="30"
					value="<?php
    echo $myrow[publisher];
    ?>"></td>
				<td rowspan="2" align="center" valign="top" bgcolor="#FFFFFF"><img
					src="images.php?recid=<?php
    echo $myrow[id];
    ?>" width="135"
					height="165" border="0"></td>
			</tr>
			<tr>
				<td height="36" align="right" bgcolor="#FFFFFF">图书简介：</td>
				<td colspan="2" bgcolor="#FFFFFF"><textarea name="synopsis"
					cols="30" rows="10" id="synopsis"><?php
    echo $myrow[synopsis];
    ?></textarea></td>
			</tr>
		</table>
		</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td height="102">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</table>
<p>&nbsp;</p>
</body>
</html>
