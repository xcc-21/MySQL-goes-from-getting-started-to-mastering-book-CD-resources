<?php
include_once("conn/conn.php");
include_once("top.php");
?>
<table width="870" height="30" align="center" background="images/bg_14(1).jpg"><tr><td width="129" rowspan="2">&nbsp;</td>
    <td width="729"></td>
</tr>
  <tr>
    <td><span class="a9">�������</span></td>
  </tr>
</table>
<table width="870" align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF">
<table width="750" height="60" border="0" align="center" cellpadding="0">
        
        <tr>
          <td>
		  
		    <br>
      <table width="700" height="40" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
       
	    <tr>
          <td colspan="2" bgcolor="#CCCCCC"><div align="center">�������</div></td>
          <td width="150" height="20" bgcolor="#CCCCCC"><div align="center">���ʱ��</div></td>
          <td width="70" height="20" bgcolor="#CCCCCC"><div align="center">���ش���</div></td>
        </tr>
           <?php
	  $sql=mysql_query("select count(*) as total from tb_soft",$conn);
	  $info=mysql_fetch_array($sql);
	  $total=$info[total];
	 if($total==0)
	    {
	     echo "<div align=center>�Բ�����������ṩ���أ�</div>";
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
		   
		   $pagesize=25;
		   
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
	   
	   
	    <tr>
          <td colspan="2" bgcolor="#FFFFFF">&nbsp;<a href="softinfo.php?id=<?php echo $info[id];?>" class="a1"><?php echo unhtml($info[softname]);?></a></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info[addtime];?></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><?php echo $info[click];?></div></td>
       </tr>
	  
	   <?php
	     }
	   }	
	  ?> 
      </table>
	  	  <br></td>
        </tr>
      </table>
      <table width="750" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td bgcolor="#FFFFFF"><table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="479"><div align="left">&nbsp;&nbsp;���ṩ�������&nbsp;<?php echo $total;?>&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<?php echo $pagesize;?>&nbsp;��&nbsp;��&nbsp;<?php echo $page;?>&nbsp;ҳ/��&nbsp;<?php echo $pagecount;?>&nbsp;ҳ</div></td>
              <td width="269"><div align="right"><a href="<?php echo $_SERVER["PHP_SELF"]?>?page=1" class="a1">��ҳ</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
		 if($page>1) 
		  
		   echo $page-1;
		  else
		   echo 1;  
		   ?>" class="a1">��һҳ</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
		 if($page<$pagecount) 
		  
		   echo $page+1;
		  else
		   echo $pagecount;  
		   ?>" class="a1">��һҳ&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php echo $pagecount;?>" class="a1">βҳ</a>&nbsp;&nbsp;</div></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table width="750" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>


</td>
        </tr></table>
<?php
include_once("bottom.php");
?>