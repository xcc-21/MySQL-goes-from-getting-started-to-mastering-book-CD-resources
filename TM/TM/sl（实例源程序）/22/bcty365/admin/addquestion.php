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
		   
		     if(form.author.value==""){
			 
			   alert("�������������ƣ�");
			   form.author.focus();
			   return(false);
			 }
			 
			 if(form.question.value==""){
			 
			   alert("���������⣡");
			   form.question.focus();
			   return(false);
			 }
			 
			  if(form.answer.value==""){
			 
			   alert("����������𰸣�");
			   form.answer.focus();
			   return(false);
			 }
			 
		   return(true);
		   
		   }	  	  
	  </script>
<table width="565" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
        
		<form name="form1" method="post" action="savecjwt.php" onSubmit="return chkinput(this)">
      <tr>
          <td height="25" colspan="3" align="center" class="a5"><?php echo $htgl;?></td>
        </tr>
        <tr>
          <td width="117" height="25" bgcolor="#FFFFFF"><div align="center">���ߣ�</div></td>
          <td width="435" height="25" bgcolor="#FFFFFF">&nbsp;
          <input type="text" name="author" size="25" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="140" bgcolor="#FFFFFF"><div align="center">���⣺</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<textarea name="question" rows="10" cols="60" class="textarea"></textarea></td>
        </tr>
        <tr>
          <td height="140" bgcolor="#FFFFFF"><div align="center">�𰸣�</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<textarea name="answer" rows="10" cols="60" class="textarea"></textarea></td>
        </tr>
        <tr>
          <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="���" class="btn_grey">&nbsp;&nbsp;<input type="reset" value="��д" class="btn_grey"></div></td>
        </tr>
		</form>
</table>	 
</body>
</html>
