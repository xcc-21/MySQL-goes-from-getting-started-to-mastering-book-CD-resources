<?php
include_once("top.php");
include_once("bbs_top.php");
?>
<script>
 function chkinput(form)
  {
    if(form.find_name.value=="")
	 {
	   alert('��������ҹؼ���!');
	   form.find_name.select();
	   return(false);
	 }
  
  }
</script>
<table width="870" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
      <tr>
        <td height="19" bgcolor="#FFFFFF"><table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
    </table>
          <table width="750" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
       <tr>
          <td height="25" align="right" bgcolor="#F7F7F7"><div align="center">
            <table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#6EBEC7">
              <tr>
                <td align="center"><strong>��������</strong></td>
              </tr>
            </table>
          </div></td>
        </tr>
	    <tr>
          <td height="25" align="right" bgcolor="#F7F7F7"><div align="center">
            <table width="590" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
			<form name="form_findbbs" method="post" action="bbs_find.php" onSubmit="return chkinput(this)">
              <tr>
                <td width="121"><div align="right">������ؼ��֣�</div></td>
                <td width="229"><div align="center"><input type="text" name="find_name" size="35" maxlength="100" class="inputcss">
                </div></td>
                <td width="89"><div align="center">
                  <select name="find_method" class="inputcss">
                    <option value="user">�û�</option>
                    <option value="title">����</option>
                    <option value="content">����</option>
                  </select>
                  </div></td>
                <td width="161"><div align="left">
                  <input type="submit" name="submit" id="submit" value="����" class="buttoncss">
                </div></td>
              </tr>
			  </form>
            </table>
          </div></td>
        </tr>
      </table>
    <?php
	 if($_POST["submit"]!=""|| $_GET[page]!="")
	  {
	?>
<table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
    </table>
	<table width="750" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
      <?php
	         
			if($_GET[findname]=="") 
			 {
			  $findname=$_POST[find_name];
			 
			 }
	         else
			  {
			   $findname=$_GET[findname];
			  }
			 if($_GET[findmethod]=="") 
			 {
			    $findmethod=$_POST[find_method];
			 
			 }
	         else
			  {
			    $findmethod=$_GET[findmethod];
			  }
			 
			
			if($findmethod=="user")
			 { $sql=mysql_query("select id from tb_user where usernc='".$findname."'",$conn);
			   $info=mysql_fetch_array($sql);
			   $sql2=mysql_query("select count(*) as total from tb_bbs where userid='".$info[id]."'",$conn);
			 }
			 elseif($findmethod=="title")
			  {
			   $sql2=mysql_query("select count(*) as total from tb_bbs where title like '%".$findname."%'",$conn);
			  }
			 elseif($findmethod=="content") 
			  {
			    $sql2=mysql_query("select count(*) as total from tb_bbs where content like '%".$findname."%'",$conn);
			  }
		    //$sql2=mysql_query("select count(*) as total from tb_bbs where typeid='".$typeid."'",$conn);
	        $info2=mysql_fetch_array($sql2);
	        $total=$info2[total];
	        if($total==0)
	         {
	           echo "<tr>";
	           echo "<td  height=\"20\" colspan=\"3\" bgcolor=\"#FFFFFF\"><div align=\"center\"> �Բ���û�в��ҵ���Ҫ�ҵ����ӣ�</div></td>";
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
			if($findmethod=="user")
			 { $sql=mysql_query("select id from tb_user where usernc='".$findname."'",$conn);
			   $info=mysql_fetch_array($sql);
			$sql2=mysql_query("select * from tb_bbs where  userid='".$info[id]."' order by createtime desc  limit ".($page-1)*$pagesize.",$pagesize",$conn); }
			 elseif($findmethod=="title")
			  {
			  $sql2=mysql_query("select * from tb_bbs where title like '%".$findname."%' order by createtime desc  limit ".($page-1)*$pagesize.",$pagesize",$conn);  }
			 elseif($findmethod=="content") 
			  {
			 $sql2=mysql_query("select * from tb_bbs where  content like '%".$findname."%' order by createtime desc  limit ".($page-1)*$pagesize.",$pagesize",$conn); 
			  }		
              //$sql2=mysql_query("select * from tb_bbs where  typeid='".$typeid."' order by createtime desc  limit ".($page-1)*$pagesize.",$pagesize",$conn);
	    ?>
       <tr>
        <td height="25" colspan="5" align="right" bgcolor="#F7F7F7"><div align="center">
          <table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#6EBEC7">
            <tr>
              <td align="left" >&nbsp;&nbsp;&nbsp;&nbsp;<?php
		
			if($findmethod=="user") 
			 {
			   echo "���û����в���";
			 } 
			 elseif($findmethod=="title")
			  {
			   echo "��������в���";
			  } 
		     elseif($findmethod=="content") 
			  {
			   echo "�����ݽ��в���";
			  }
		?>              </td>
            </tr>
          </table>
        </div></td>
        </tr>
	  <tr>
        <td width="308" height="25" align="right" bgcolor="#F7F7F7"><div align="center">��&nbsp;&nbsp;��</div></td>
        <td width="78" bgcolor="#F7F7F7"><div align="center">����</div></td>
        <td width="58" bgcolor="#F7F7F7"><div align="center">�ظ�����</div></td>
        <td width="117" bgcolor="#F7F7F7"><div align="center">����ʱ��</div></td>
        <td width="117" bgcolor="#F7F7F7"><div align="center">���ظ�ʱ��</div></td>
        </tr>
      <?php
		 while($info2=mysql_fetch_array($sql2))
	      {  
			$sql3=mysql_query("select * from tb_user where id='".$info2[userid]."'",$conn);
			$info3=mysql_fetch_array($sql3);
		
		?>
      <tr>
        <td height="23" align="right" bgcolor="#F7F7F7"><div align="left">&nbsp;&nbsp;<a href="bbs_lookbbs.php?id=<?php echo $info2[id];?>" class="a1"><?php include_once("function.php"); echo unhtml($info2[title]);?></a></div></td>
        <td height="23" bgcolor="#F7F7F7"><div align="center"><a href="http://www.mingrisoft.com" target="_blank"></a><?php echo $info3[usernc];?></div></td>
        <td height="23" bgcolor="#F7F7F7"><div align="center">
            <?php
		     $sql4=mysql_query("select count(*) as totalreply from tb_reply where bbsid='".$info2[id]."'",$conn);
		     $info4=mysql_fetch_array($sql4);
			 echo $info4[totalreply];
		  ?>
        </div></td>
        <td height="23" bgcolor="#F7F7F7"><div align="center"><?php echo $info2[createtime];?></div></td>
        <td height="23" bgcolor="#F7F7F7"><div align="center"><?php echo $info2[lastreplytime];?></div></td>
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
<table width="750"><tr><td></td></tr></table>    
<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
      <tr>
        <td width="400" height="20" align="center">�����ҵ�����&nbsp;<?php echo $total;?>&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<?php echo $pagesize?>&nbsp;��&nbsp;��&nbsp;<?php echo $page;?>&nbsp;ҳ&nbsp;/��&nbsp;<?php echo $pagecount?>&nbsp;ҳ</td>
        <td width="400" height="20" align="center"><div align="center">
            <?php
   if($page>=2)
	{
    ?>
            <a href="bbs_find.php?page=1&findname=<?php echo $findname;?>&findmethod=<?php echo $findmethod;?>" title="��ҳ" class="a1"><font face="webdings"> 9 </font></a> <a href="bbs_find.php?page=<?php echo $page-1;?>&findname=<?php echo $findname;?>&findmethod=<?php echo $findmethod;?>" title="ǰһҳ" class="a1"><font face="webdings"> 7 </font></a>
            <?php
    }
   if($pagecount<=4)
     {
		for($i=1;$i<=$pagecount;$i++)
		{
  ?>
            <a href="bbs_find.php?page=<?php echo $i;?>&findname=<?php echo $findname;?>&findmethod=<?php echo $findmethod;?>" class="a1"><?php echo $i;?></a>
            <?php
		 }
	  }
	else
	  {
		 for($i=1;$i<=4;$i++)
		  {	 
  ?>
            <a href="bbs_find.php?page=<?php echo $i;?>&findname=<?php echo $findname;?>&findmethod=<?php echo $findmethod;?>" class="a1"><?php echo $i;?></a>
            <?php 
          }
  ?>
            <a href="bbs_find.php?page=<?php 
		 if($pagecount>=$page+1)
		   echo $page+1;
		  else
		   echo 1; 
		 
		 ?>&findname=<?php echo $findname;?>&findmethod=<?php echo $findmethod;?>" title="��һҳ" class="a1"><font face="webdings"> 8 </font></a> <a href="bbs_find.php?page=<?php echo $pagecount;?>&findname=<?php echo $findname;?>&findmethod=<?php echo $findmethod;?>" title="βҳ" class="a1"><font face="webdings"> : </font></a>
            <?php 
          }
  ?>
        </div></td>
      </tr>
    </table>
    <?php
     }
  }
 ?>
    <table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
      </tr>
    </table>
<table width="800" height="6" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<?php
include_once("bottom.php");
?>