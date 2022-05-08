<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>以二进制形式上传文件到数据库</title>
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

.STYLE1 {
	color: #FF0000
}
-->
</style>
</head>
<script language="javascript">
function check_form(form)
{
	if(form.bookname.value=="")
	{
		alert("图书名称不能为空!!");
		form.bookname.select();
		  return(false);
	}
	if(form.price.value=="")
	{
		alert("图书价格不能为空!!");
		form.price.select();
		  return(false);
	}
	if(form.cover.value=="")
	{
		alert("图书封面不能为空!!");
		form.cover.select();
		  return(false);
	}
	 return(true);
}
</script>
<body>
<table width="779" height="712" border="0" align="center"
	cellpadding="0" cellspacing="0" background="images/admin.jpg">
	<tr>
		<td width="196" height="230">&nbsp;</td>
		<td width="564">&nbsp;</td>
		<td width="19">&nbsp;</td>
	</tr>
	<tr>
		<td height="380">&nbsp;</td>
		<td valign="top">
		<table width="564" border="1" cellpadding="1" cellspacing="1"
			bordercolor="#FFFFFF" bgcolor="#999999">
			<form name="form" method="post" action="index_ok.php"
				onSubmit="return check_form(this)">
			<tr>
				<td width="97" height="28" align="right" bgcolor="#FFFFFF">图书名称：</td>
				<td colspan="2" align="left" valign="middle" bgcolor="#FFFFFF"><input
					name="bookname" type="text" id="bookname" size="35"> <span
					class="STYLE1"> *</span></td>
				<td width="172" bgcolor="#FFFFFF">&nbsp;</td>
			</tr>
			<tr>
				<td height="30" align="right" bgcolor="#FFFFFF">作者：</td>
				<td width="177" align="center" valign="top" bgcolor="#FFFFFF"><input
					name="maker" type="text" id="maker" size="25"></td>
				<td width="95" align="right" valign="middle" bgcolor="#FFFFFF">价格：</td>
				<td bgcolor="#FFFFFF"><input name="price" type="text" id="price"
					size="8"> <span class="STYLE1">*</span></td>
			</tr>

			<tr>
				<td height="36" align="right" bgcolor="#FFFFFF">出版时间：</td>
				<td colspan="3" bgcolor="#FFFFFF"><input name="issuDate" type="text"
					id="issuDate" size="30"></td>
			</tr>
			<tr>
				<td height="36" align="right" bgcolor="#FFFFFF">出版社：</td>
				<td colspan="3" bgcolor="#FFFFFF"><input name="publisher"
					type="text" id="publisher" size="30"></td>
			</tr>
			<tr>
				<td height="36" align="right" bgcolor="#FFFFFF">图书简介：</td>
				<td colspan="3" bgcolor="#FFFFFF"><textarea name="synopsis"
					cols="35" rows="5" id="synopsis"></textarea></td>
			</tr>
			<tr>
				<td height="36" align="right" bgcolor="#FFFFFF">封面预览：</td>
				<td colspan="3" bgcolor="#FFFFFF"><input name="cover" type="file"
					id="cover" size="30"> <span class="STYLE1">*</span></td>
			</tr>
			<tr>
				<td height="36" colspan="4" align="center" bgcolor="#FFFFFF"><input
					type="submit" name="Submit" value="提交"></td>
			</tr>
			</form>
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
