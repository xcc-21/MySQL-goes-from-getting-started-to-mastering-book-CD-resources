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
      <?php
	  include_once("../conn/conn.php");
	  include_once("function.php");  
	  $sql=mysql_query("select count(*) as total from tb_soft",$conn);
	  $info=mysql_fetch_array($sql);
	  $total=$info[total];
	 if($total==0)
	    {
	     echo "<div align=center>��������ṩ���أ�</div>";
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
		   
		   $pagesize=5;
		   
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
         $sql=mysql_query("select * from tb_soft order by addtime desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
	     while($info=mysql_fetch_array($sql))
	      { 
	  
		  
	 ?>
      <table width="565" height="220" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
        <tr>
          <td height="25" colspan="3" align="center" class="a5"><?php echo $htgl;?></td>
        </tr>
        <tr>
          <td width="120" height="25" bgcolor="#ffffff"><div align="center">������ƣ�</div></td>
          <td width="510" bgcolor="#ffffff">&nbsp;<?php echo unhtml($info[softname]);?></td>
          <td width="70" bgcolor="#ffffff"><div align="center"><a href="javascript:if(window.confirm('ȷ��ɾ�����������ô��')==true){window.location.href='deletesoft.php?id=<?php echo $info[id];?>';}"><img src="images/del.gif" width="22" height="22"></a></div></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#ffffff"><div align="center">���ʱ�䣺</div></td>
          <td height="25" colspan="2" bgcolor="#ffffff">&nbsp;<?php echo $info[addtime];?></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#ffffff"><div align="center">���ش�����</div></td>
          <td height="25" colspan="2" bgcolor="#ffffff">&nbsp;<?php echo $info[click];?></td>
        </tr>
        <tr>
          <td height="120" bgcolor="#ffffff"><div align="center">���ݼ�飺</div></td>
          <td height="120" colspan="2" bgcolor="#ffffff">&nbsp;<?php echo unhtml($info[content]);?></td>
        </tr>
      </table>
      <table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
         <tr>
           <td>&nbsp;</td>
         </tr>
</table>
	   <?php
	      }
	  	}
	  ?>
	  
	  <?php
if($total!=0)
{
?>
<table width="560" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="400" height="20"><div align="left">���������Ʒ&nbsp;<?php echo $total;?>&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<?php echo $pagesize?>&nbsp;��&nbsp;��&nbsp;<?php echo $page;?>&nbsp;ҳ&nbsp;/��&nbsp;<?php echo $pagecount?>&nbsp;ҳ</div></td>
    <td width="300">
	<div align="right">
	<?php
   if($page>=2)
	{
    ?>
  <a href="default.php?htgl=�༭�������&page=1" title="��ҳ"><font face="webdings"> 9 </font></a> 
  <a href="default.php?htgl=�༭�������&page=<?php echo $page-1;?>" title="ǰһҳ"><font face="webdings"> 7 </font></a>
  <?php
    }
   if($pagecount<=4)
     {
		for($i=1;$i<=$pagecount;$i++)
		{
  ?>
        <a href="default.php?htgl=�༭�������&page=<?php echo $i;?>"><?php echo $i;?></a>
  <?php
		 }
	  }
	else
	  {
		 for($i=1;$i<=4;$i++)
		  {	 
  ?>
          <a href="default.php?htgl=�༭�������&page=<?php echo $i;?>"><?php echo $i;?></a>
  <?php 
          }
  ?>
        <a href="default.php?htgl=�༭�������&page=<?php 
		 if($pagecount>=$page+1)
		   echo $page+1;
		  else
		   echo 1; 
		 
		 ?>" title="��һҳ"><font face="webdings"> 8 </font></a> 
		<a href="default.php?htgl=�༭�������&page=<?php echo $pagecount;?>" title="βҳ"><font face="webdings"> : </font></a>
  <?php 
          }
		  }
  ?>
	&nbsp;</div></td>
  </tr>
</table>
</body>
</html>
