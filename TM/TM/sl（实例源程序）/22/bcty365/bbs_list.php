<?php
include_once("top.php");
include_once("bbs_top.php");
?>
<table width="870" align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
  <tr><td bgcolor="#FFFFFF">
<table width="800" height="3" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<?php

$typeid=$_GET[id];
$sql=mysql_query("select * from tb_type_small where id='".$typeid."'",$conn);
$info=mysql_fetch_array($sql);

?>


<script language="javascript">
</script>
<script language="javascript">function ShowTR(objImg,objTr){
	if(objTr.style.display == ""){
		objTr.style.display = "none";
		objImg.src = "images/jia.gif";
		objImg.alt = "չ��";		
	}else{
		objTr.style.display = "";
		objImg.src = "images/jian.gif";
		objImg.alt = "�۵�";		
	}
}
</script>

<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0" background="images/lt_15(2).jpg">
<tr><td height="2"></td></tr>
          <tr>
            <td width="740" class="a9"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo unhtml($info[title]);?>&nbsp;���</div></td>
            <td width="160"><div align="center"><span class="a13">��</span>&nbsp;<a href="
			
			<?php
			  if($_SESSION["unc"]!=""){
			?>
			  bbs_pubbs.php?ids=<?php echo unhtml($info[title]);?>&id=<?php echo $info[id];?>
			<?php
			  }else{
			  
			    echo "javascript:alert('���ȵ�¼��վ��Ȼ�󷢱����ӣ�');window.location.href='index.php';";
			  }
			?>
			
			" class="a8">��������</a>&nbsp;<span class="a13">��</span></div></td>
          </tr>
</table>  
<table width="750" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7" id="tab_list">

    <?php
		    $sql=mysql_query("select count(*) as total from tb_bbs where typeid='".$typeid."'",$conn);
	        $info=mysql_fetch_array($sql);
	        $total=$info[total];
	        if($total==0)
	         {
	           echo "<tr>";
	           echo "<td  height=\"25\"  bgcolor=\"#FFFFFF\"><div align=\"center\">�����������˷���!</div></td>";
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
		   
		   $pagesize=30;
		   
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
    <td width="51" height="23" bgcolor="#F0F5FA"><div align="center">״&nbsp;&nbsp;̬</div></td>
    <td width="41" bgcolor="#F0F5FA"><div align="center">��&nbsp;&nbsp;��</div></td>
    <td width="462" height="23" bgcolor="#F0F5FA"><div align="center">��&nbsp;&nbsp;&nbsp;��</div></td>
    <td width="79" bgcolor="#F0F5FA"><div align="center">�ظ�|����</div></td>
    <td width="122" bgcolor="#F0F5FA"><div align="center">��&nbsp;&nbsp;��</div></td>
    <td width="159" bgcolor="#F0F5FA"><div align="center">����ʱ��</div></td>
  </tr>
  <?php
		$sql=mysql_query("select * from tb_bbs where  typeid='".$typeid."' order by top desc,createtime desc,lastreplytime desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
	 	while($info=mysql_fetch_array($sql))
	        { 
	   ?>
  <tr>
    <td height="23" bgcolor="#E9F3FF"><div align="center">
      <?php
			if($info[top]==1){
			echo "<img src=\"images/lt_15(4).jpg\" width=\"30\" height=\"25\">";
			}else{	
			 if($info[readtimes]>=5)
			 {
			  echo "<img src=\"images/lt_15(4).jpg\" width=\"30\" height=\"25\">";
			 }
			 else
			 {
			  echo " <img src=\"images/lt_15(4).jpg\" width=\"30\" height=\"25\">";
			 }
			} 
			?>
    </div></td>
    <td height="23" bgcolor="#E9F3FF"><div align="center"><img src="<?php echo $info[head];?>" /></div></td>
    <td height="23" bgcolor="#E9F3FF" class="a12">&nbsp;<img src="images/jia.gif" border="0" alt="չ��" id="img<?php echo $info[id];?>" onclick="ShowTR(img<?php echo $info[id];?>,tr<?php echo $info[id];?>)" />
        <?php 
			include_once("function.php");
			if($info[top]==1){
			 echo "<a href=\"bbs_lookbbs.php?id=".$info[id]."\" class=a1>".unhtml($info[title])."";
			}else{
			echo "<a href=\"bbs_lookbbs.php?id=".$info[id]."\" class=a1>".unhtml($info[title]);
			}
			?>
        <div align="left"></div></td>
    <td height="23" bgcolor="#E9F3FF"><div align="center">
      <?php
			 $sql1=mysql_query("select count(*) as total from tb_reply where bbsid='".$info[id]."'",$conn);
			 $info1=mysql_fetch_array($sql1);
			 echo $info1[total];
			?>
      |&nbsp;<?php echo $info[readtimes];?></div></td>
    <td height="23" bgcolor="#E9F3FF"><div align="center">
      <?php 
		        $sql1=mysql_query("select usernc from tb_user where id='".$info[userid]."'",$conn);
		     	$info1=mysql_fetch_array($sql1);
				echo $info1[usernc];
			?>
    </div></td>
    <td height="23" bgcolor="#E9F3FF"><div align="center"><?php echo $info[createtime];?></div></td>
  </tr>
  <tr id="tr<?php echo $info[id];?>" style="display:none">
    <td height="23" bgcolor="#E9F3FF">&nbsp;</td>
    <td height="23" colspan="5" bgcolor="#E9F3FF"><table width="650" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
      <?php
			  $sqlr=mysql_query("select * from tb_reply where  bbsid='".$info[id]."' order by createtime asc",$conn);
			  $infor=mysql_fetch_array($sqlr);
			  if($infor==false)
			   {
			   ?>
      <tr>
        <td width="750" height="25"><div align="center">�������޻ظ�!</div></td>
      </tr>
      <?php
			   }else{
			    $m=0;
				$k=1;
				do
				{
			 ?>
      <tr>
        <td width="750" height="25" bgcolor="#E9F3FF"><?php if($m%3==0) $k++;?>
              <?php echo ($m+1).".&nbsp;";?><a href="bbs_lookbbs.php?id=<?php echo $info[id]?>&page=<?php echo ($k-1);?>" class="a4"><?php echo $infor[title];?></a>&nbsp;(<?php echo $infor[createtime];?>)</td>
      </tr>
      <?php
			   $m++;
			    }while($infor=mysql_fetch_array($sqlr));
			 
			     }
			 ?>
    </table></td>
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
<table width="800" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="591" bgcolor="#CCCCCC"><div align="left">&nbsp;&nbsp;��������&nbsp;<?php echo $total;?>&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<?php echo $pagesize;?>&nbsp;��&nbsp;��&nbsp;<?php echo $page;?>&nbsp;ҳ/��&nbsp;<?php echo $pagecount;?>&nbsp;ҳ</div></td>
        <td width="329" bgcolor="#CCCCCC"><div align="right"><a href="<?php echo $_SERVER["PHP_SELF"]?>?page=1&id=<?php echo $_GET["id"];?>" class="a1">��ҳ</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
		 if($page>1) 
		  
		   echo $page-1;
		  else
		   echo 1;  
		   ?>&id=<?php echo $_GET["id"];?>" class="a1">��һҳ</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
		 if($page<$pagecount) 
		  
		   echo $page+1;
		  else
		   echo $pagecount;  
		   ?>&id=<?php echo $_GET["id"];?>" class="a1">��һҳ</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php echo $pagecount;?>&id=<?php echo $_GET["id"];?>" class="a1">βҳ</a>&nbsp;&nbsp;</div></td>
      </tr>
</table>
<?php
 }

?>
</td>
  </tr></table> 

<?php
include_once("bottom.php");
?>