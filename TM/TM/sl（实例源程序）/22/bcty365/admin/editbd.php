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

<table width="565" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
        <tr>
          <td height="22" colspan="3" align="center"><span class="a5"><?php echo $htgl;?></span></td>
        </tr>
        <tr>
          <td width="249" height="22" bgcolor="#FFFFFF"><div align="center">�汾����</div></td>
         
          <td width="163" bgcolor="#FFFFFF"><div align="center">���ʱ��</div></td>
          <td width="94" bgcolor="#FFFFFF"><div align="center">ɾ��</div></td>
        </tr>
		<?php
		include_once("../conn/conn.php");
		include_once("function.php");
		$sql=mysql_query("select * from tb_bb order by createtime desc",$conn);
		$info=mysql_fetch_array($sql);
		if($info==false){
               echo "<div align=center>�Բ���,���ް汾��Ϣ!</div>";		
		}else{
		  do{
		?>
        
		
		<tr>
          <td height="22" bgcolor="#FFFFFF"><div align="center"><?php  echo unhtml($info[bbname]);?></div></td>
        
          <td height="22" bgcolor="#FFFFFF"><div align="center"><?php echo $info[createtime];?></div></td>
          <td height="22" bgcolor="#FFFFFF"><div align="center"><a href="javascript:if(window.confirm('��ȷ��ɾ���ñ�̴ʵ�汾ô?')==true){window.location.href='deletebb.php?id=<?php echo $info[id];?>';}"><img src="images/del.gif" width="22" height="22" border="0"></a></div></td>
        </tr>
		
		<?php
		  }while($info=mysql_fetch_array($sql));
		}
		
		?>
</table>
</body>
</html>
