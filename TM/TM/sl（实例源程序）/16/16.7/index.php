<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>模拟转帐</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<table width="392" height="257" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/back.gif">
	<?php 
	 include_once("conn.php");
	 $sql=$conn->query("select * from tb_zy where flag='mrsoft'");
	 $info=$sql->fetch_array(MYSQLI_ASSOC);
	
	 $sql1=$conn->query("select * from tb_zy where flag='mr'");
	 $info1=$sql1->fetch_array(MYSQLI_ASSOC);
	
	?>
	<script language="javascript">
	function chkinput(form)
	 {
	   if(form.tob.value=="")
	    {
		  alert("请输入金额!");
		  form.tob.select();
		  return(false);
		 }
	   if(isNaN(form.tob.value)==true)
	    {
		  alert("金额只能为数字!");
		  form.tob.select();
		  return(false);
		
		}
	  return(true);
	 }
	
	</script>
	<form name="form1" method="post" action="zz.php" onsubmit="return chkinput(this)">
	<table width="300" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
	<table width="300" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>A帐户现有金额：<?php echo $info['money'];?>&nbsp;元</td>
      </tr>
    </table>
      <table width="300" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>转给B帐户：<input type="text" name="tob" class="inputcss" size="20"></td>
        </tr>
      </table>
      <table width="300" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>B帐户现有金额：<?php echo $info1['money'];?>&nbsp;元</td>
        </tr>
      </table>
      <table width="300" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><hr size="1"></td>
        </tr>
      </table>
      <table width="300" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="center"><input type="submit" value="转帐" class="buttoncss"></div></td>
        </tr>
      </table>
	  </form>
    </td>
  </tr>
</table>
</body>
</html>
