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
<table width="565" height="81" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
  <?php
	  include_once("../conn/conn.php");
	  include_once("function.php");  
	  $sql=mysql_query("select count(*) as total from tb_sjxz",$conn);
	  $info=mysql_fetch_array($sql);
	  $total=$info[total];
	 if($total==0)
	    {
	     echo "<tr>";
	     echo  "<td height=\"25\" colspan=\"4\" align=\"center\" bgcolor=\"#F7F7F7\">�Բ���������������</td>";
         echo "</tr>";
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
		   
		   $pagesize=20;
		   
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
      
	  
		  
	 ?>
  <tr>
    <td height="25" colspan="5" class="a5" align="center"><?php echo $htgl;?></td>
  </tr>
  <tr>
    <td width="72" align="right" bgcolor="#F7F7F7"><div align="center">�������汾</div></td>
    <td width="105" align="right" bgcolor="#F7F7F7"><div align="center">���������</div></td>
    <td width="166" height="25" align="right" bgcolor="#F7F7F7"><div align="center">����������</div></td>
    <td width="133" bgcolor="#F7F7F7"><div align="center">����ʱ��</div></td>
    <td width="61" bgcolor="#F7F7F7"><div align="center">ɾ��</div></td>
  </tr>
  <?php
	   $sql=mysql_query("select * from tb_sjxz order by addtime desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
	   while($info=mysql_fetch_array($sql))
	    {  	
	 
	 ?>
  <tr>
    <td align="center" bgcolor="#F7F7F7">&nbsp;
<?php $query=mysql_query("select * from tb_bb where id='$info[bbid]'");
$myrow=mysql_fetch_array($query);
echo $myrow[bbname];
?></td>
    <td align="center" bgcolor="#F7F7F7">&nbsp;
<?php $query=mysql_query("select * from tb_type where id='$info[typeid]'");
$myrow=mysql_fetch_array($query);
echo $myrow[typename];
?></td>
    <td height="25" align="right" bgcolor="#F7F7F7"><div align="left">&nbsp;<?php echo unhtml($info[name]);?></div></td>
    <td height="25" align="right" bgcolor="#F7F7F7"><div align="center"><?php echo $info[addtime];?> </div></td>
    <td height="25" align="right" bgcolor="#F7F7F7"><div align="center"><a href="default.php?htgl=�༭������&mtid=<?php echo $info[id];?>"></a><a href="javascript:if(window.confirm('��ȷ��ɾ����������ô��')==true){window.location.href='deletesjb.php?id=<?php echo $info[id];?>';}"><img src="images/del.gif" width="22" height="22" border="0"></a></div></td>
  </tr>
  <?php
	      }
	  	}
	  ?>
</table>
<?php
if($total!=0)
{
?>
<table width="565" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="400" height="20"><div align="left">����������&nbsp;<?php echo $total;?>&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<?php echo $pagesize?>&nbsp;��&nbsp;��&nbsp;<?php echo $page;?>&nbsp;ҳ&nbsp;/��&nbsp;<?php echo $pagecount?>&nbsp;ҳ</div></td>
    <td width="300">
	<div align="right">
	<?php
   if($page>=2)
	{
    ?>
  <a href="default.php?htgl=�༭������&page=1" title="��ҳ"><font face="webdings"> 9 </font></a> 
  <a href="default.php?htgl=�༭������&page=<?php echo $page-1;?>" title="ǰһҳ"><font face="webdings"> 7 </font></a>
  <?php
    }
   if($pagecount<=4)
     {
		for($i=1;$i<=$pagecount;$i++)
		{
  ?>
        <a href="default.php?htgl=�༭������&page=<?php echo $i;?>"><?php echo $i;?></a>
  <?php
		 }
	  }
	else
	  {
		 for($i=1;$i<=4;$i++)
		  {	 
  ?>
          <a href="default.php?htgl=�༭������&page=<?php echo $i;?>"><?php echo $i;?></a>
  <?php 
          }
  ?>
        <a href="default.php?htgl=�༭������&page=<?php 
		 if($pagecount>=$page+1)
		   echo $page+1;
		  else
		   echo 1; 
		 
		 ?>" title="��һҳ"><font face="webdings"> 8 </font></a> 
		<a href="default.php?htgl=�༭������&page=<?php echo $pagecount;?>" title="βҳ"><font face="webdings"> : </font></a>
  <?php 
          }
		  }
  ?>
	&nbsp;</div></td>
  </tr>
</table>
</body>
</html>
