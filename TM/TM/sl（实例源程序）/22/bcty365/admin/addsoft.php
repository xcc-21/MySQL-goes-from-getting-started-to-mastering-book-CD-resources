<?php
session_start();
if($_SESSION["admin_nc"]=="")
 {
  echo "<script>alert('��ֹ�Ƿ���¼!');window.location.href='../index.php';</script>";
  exit;
 }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>BCTY365������������̨����</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
	 <script language="javascript">
	 
	   function chkinput(form){
	   
	     if(form.softname.value==""){
		     alert("������������⣡");
		     form.softname.focus();
			 return(false);
		 
		 }
		 
		   
	     if(form.content.value==""){
		     alert("�����������飡");
		     form.content.focus();
			 return(false);
		 
		 }
		   
	     if(form.address.value==""){
		     alert("��ѡ�������ַ��");
		     form.address.focus();
			 return(false);
		 
		 }
	   
	   return(true);
	   }
	 
	 
	 </script> 
	<table width="565" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
        <form name="form1" method="post" action="savesoft.php" onSubmit="return chkinput(this)" enctype="multipart/form-data">
		<tr>
		  <td height="22" class="a5" colspan="2"><?php echo $htgl;?></td>
		  </tr>
		<tr>
          <td width="116" height="25" bgcolor="#FFFFFF"><div align="center">������ƣ�</div></td>
          <td width="436" bgcolor="#FFFFFF">&nbsp;
          <input type="text" name="softname" size="50" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="150" bgcolor="#FFFFFF"><div align="center">���ݼ�飺</div></td>
          <td height="150" bgcolor="#FFFFFF">&nbsp;<textarea name="content" rows="10" cols="60" class="textarea"></textarea></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">�����ַ��</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="file" name="address" size="38" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="���" class="btn_grey">&nbsp;&nbsp;<input type="reset" value="��д" class="btn_grey"></div></td>
        </tr>
		</form>
</table>  
	  
	  
</body>
</html>
