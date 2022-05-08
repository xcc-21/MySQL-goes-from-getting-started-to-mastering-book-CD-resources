<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户注册</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
  function chkinput(form){
  
    if(form.name.value==""){
	  alert("请输入用户昵称!");
	  form.nc.select();
	  return(false);
	}
   if(form.pwd.value==""){
	  alert("请输入注册密码!");
	  form.pwd.select();
	  return(false);
	}
	 if(form.email.value==""){
	  alert("请输入E-mail地址!");
	  form.email.select();
	  return(false);
	}
	
	if(form.address.value==""){
	  alert("请输入家庭地址!");
	  form.address.select();
	  return(false);
	}
   return(true);
  }

</script>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="500" height="65" /></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#1170FF"><table width="500" height="157" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="index.php"  onsubmit="return chkinput(this)">
	  <tr>
        <td height="25" colspan="2" bgcolor="#B5D3FF"><div align="center">用户注册</div></td>
      </tr>
      <tr>
        <td width="150" height="25" bgcolor="#FFFFFF"><div align="center">用户昵称：</div></td>
        <td width="347" bgcolor="#FFFFFF">&nbsp;<input type="text" name="name" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">注册密码：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="password" name="pwd" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">E-mail：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="email" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">家庭住址：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="address" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" name="submit" value="注册" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="重写" class="buttoncss"></div></td>
      </tr>
	 </form> 
    </table></td>
  </tr>
</table>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
       版权所有&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">吉林省**科技有限公司</a>! 未经授权禁止复制或建立镜像!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com" class="a1">www.mingrisoft.com</a>, All Rights Reserved! <br />
      <br />
      建议您在大于1024*768的分辨率下使用 </div></td>
  </tr>
</table>
<?php
 if($_POST['submit']!=""){
    $conn=new mysqli("localhost","root","root","db_database14");
    $conn->query("set names utf8");   
    $nc=$_POST['name'];
    $pwd=md5($_POST['pwd']);
    $email=$_POST['email'];
    $address=$_POST['address'];
    if($sql=$conn->query("call pro_reg('".$name."','".$pwd."','".$email."','".$address."')")){
	   echo "<script>alert('用户注册成功!');</script>";
	}else{
	    echo "<script>alert('用户注册失败!');</script>";
	}
    
 }
?>
</body>
</html>
