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
<link rel="stylesheet" type="text/css" href="css/style.css"></head>
<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
  <table width="565" height="160" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
        <tr>
          <td height="25" colspan="5" class="a5" align="center"><?php echo $htgl;?></td>
        </tr>  
    <?php
	  include_once("../conn/conn.php");
	  include_once("function.php");  
	  $sql=mysql_query("select count(*) as total from tb_leaveword",$conn);
	  $info=mysql_fetch_array($sql);
	  $total=$info[total];
	 if($total==0)
	    {
	     echo "<div align=center>���޿ͻ�������</div>";
	    }
	  
	   else
	    {
		  if(empty($_GET[page])==true || is_numeric($_GET[page])==false)
		   {
		     $page=1;
		   }
		   else
		   {
		     $page=intval($_GET[page]);
		   }
		   
		   $pagesize=3;
		   
		   if($total<$pagesize)	
		   {
		     $pagecount=1;
		   }
		   else
		   {
		     if($total%$pagesize==0)
			  {
			    $pagecount=intval($total/$pagesize);
			  }
			  else
			  {
			    $pagecount=intval($total/$pagesize)+1;
			  } 
		   }
         $sql=mysql_query("select * from tb_leaveword order by createtime desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
	     while($info=mysql_fetch_array($sql))
	      { 
	  $query=mysql_query("select * from tb_user where id='".$info[userid]."'");
		  $myrow=mysql_fetch_array($query);
	 ?>
    
        <tr>
          <td width="120" height="20" bgcolor="#CCCCCC"><div align="center">�û��ǳƣ�</div></td>
          <td width="231" bgcolor="#CCCCCC">&nbsp;<?php echo unhtml($myrow[usernc]);?></td>
          <td width="120" bgcolor="#CCCCCC"><div align="center">��ʵ������</div></td>
          <td width="174" bgcolor="#CCCCCC">&nbsp;<?php echo unhtml($myrow[truename]);?></td>
          <td width="55" bgcolor="#CCCCCC"><div align="center">
		 <a href="javascript:if(window.confirm('ȷ��ɾ�����������ô��')==true){window.location.href='deletefk.php?id=<?php echo $info[id];?>'}"> 
		  <img src="images/del.gif" width="22" height="22">		 </a> 
		  </div></td>
        </tr>
        <tr>
          <td height="20" bgcolor="#ffffff"><div align="center">E-mail��</div></td>
          <td height="20" bgcolor="#ffffff">&nbsp;<?php echo $myrow[email];?></td>
          <td height="20" bgcolor="#ffffff"><div align="center">��ϵ�绰��</div></td>
          <td height="20" colspan="2" bgcolor="#ffffff">&nbsp;<?php echo $myrow[tel];?></td>
        </tr>
        <tr>
          <td height="20" bgcolor="#ffffff"><div align="center">QQ���룺</div></td>
          <td height="20" bgcolor="#ffffff">&nbsp;<?php echo $myrow[qq];?></td>
          <td height="20" bgcolor="#ffffff"><div align="center">�������룺</div></td>
          <td height="20" colspan="2" bgcolor="#ffffff">&nbsp;<?php echo unhtml($myrow[yb]);?></td>
        </tr>
        <tr>
          <td height="20" bgcolor="#ffffff"><div align="center">��ϵ��ַ��</div></td>
          <td height="20" colspan="4" bgcolor="#ffffff">&nbsp;<?php echo unhtml($myrow[address]);?></td>
        </tr>
        <tr>
          <td height="20" bgcolor="#ffffff"><div align="center">�������⣺</div></td>
          <td height="20" colspan="4" bgcolor="#ffffff">&nbsp;<?php echo unhtml($info[title]);?></td>
        </tr>
        <tr>
          <td bgcolor="#ffffff"><div align="center">�������ݣ�</div></td>
          <td colspan="4" bgcolor="#ffffff">&nbsp;<?php echo unhtml($info[content]);?></td>
        </tr>   <?php
	      }
	  	}
	  ?>
</table>
	  
	   <table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
         <tr>
           <td>&nbsp;</td>
         </tr>
</table>
	
	  
	  <?php
if($total!=0)
{
?>
<table width="565" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="400" height="20"><div align="left">���пͻ�����&nbsp;<?php echo $total;?>&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<?php echo $pagesize?>&nbsp;��&nbsp;��&nbsp;<?php echo $page;?>&nbsp;ҳ&nbsp;/��&nbsp;<?php echo $pagecount?>&nbsp;ҳ</div></td>
    <td width="300">
	<div align="right">
	<?php
   if($page>=2)
	{
    ?>
  <a href="default.php?htgl=�鿴�ͻ�����&page=1" title="��ҳ"><font face="webdings"> 9 </font></a> 
  <a href="default.php?htgl=�鿴�ͻ�����&page=<?php echo $page-1;?>" title="ǰһҳ"><font face="webdings"> 7 </font></a>
  <?php
    }
   if($pagecount<=4)
     {
		for($i=1;$i<=$pagecount;$i++)
		{
  ?>
        <a href="default.php?htgl=�鿴�ͻ�����&page=<?php echo $i;?>"><?php echo $i;?></a>
  <?php
		 }
	  }
	else
	  {
		 for($i=1;$i<=4;$i++)
		  {	 
  ?>
          <a href="default.php?htgl=�鿴�ͻ�����&page=<?php echo $i;?>"><?php echo $i;?></a>
  <?php 
          }
  ?>
        <a href="default.php?htgl=�鿴�ͻ�����&page=<?php 
		 if($pagecount>=$page+1)
		   echo $page+1;
		  else
		   echo 1; 
		 
		 ?>" title="��һҳ"><font face="webdings"> 8 </font></a> 
		<a href="default.php?htgl=�鿴�ͻ�����&page=<?php echo $pagecount;?>" title="βҳ"><font face="webdings"> : </font></a>
  <?php 
          }
		  }
  ?>
	&nbsp;</div></td>
  </tr>
</table>
</body>
</html>
