<?php
include_once("conn/conn.php");
include_once("top.php");
?>
<table width="870" height="30" align="center" background="images/bg_14(1).jpg"><tr><td width="129" rowspan="2">&nbsp;</td>
    <td width="729"></td>
</tr>
  <tr>
    <td><span class="a9">���ﳵ</span></td>
  </tr>
</table>
<table width="870" align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF">
<table width="750" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
        
        <tr>
          <td><br>
		  
		  <table width="720" height="47" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
           
			
            <tr>
              <td width="330" height="22" bgcolor="#CCCCCC">			    <div align="center">��Ʒ����</div></td>
              <td width="155" bgcolor="#CCCCCC"><div align="center">���ۣ�Ԫ��</div></td>
              <td width="87" bgcolor="#CCCCCC"><div align="center">����������</div></td>
              <td width="143" bgcolor="#CCCCCC"><div align="center">����</div></td>
            </tr>
			<?php
			//echo $_SESSION["goodsid"]."<br>";
			//echo $_SESSION["goodsnum"];
			 $array=explode("@",$_SESSION["goodsid"]);
			 $arraynum=explode("@",$_SESSION["goodsnum"]);
			 $markid=0;
			 for($i=0;$i<count($array);$i++){
			   if($array[$i]!=""){
			     $markid++;
			   }
			 }
			
			 if($markid==0){ 
			?>
			
			
			
			<tr>
              <td height="22" colspan="4" bgcolor="#FFFFFF"><div align="center">�Բ������Ĺ��ﳵ��������Ʒ��Ϣ��</div></td>
            </tr>
			<?php
			}else{
		       $totalprice=0;
			   for($i=0;$i<count($array);$i++){
			     if($array[$i]!=""){
				   $sqlcart=mysql_query("select * from tb_bccd where id='".$array[$i]."'",$conn);
				   $infocart=mysql_fetch_array($sqlcart)
			?>
            <tr>
			<form name="form<?php echo $array[$i]?>" method="post" action="changegoodsnum.php">
              <td height="22" bgcolor="#FFFFFF">&nbsp;<?php echo unhtml($infocart["bccdname"]);?></td>
              <td height="22" bgcolor="#FFFFFF"><div align="center"><?php echo number_format($infocart["price"],2);?></div></td>
              <td height="22" bgcolor="#FFFFFF"><div align="center"><input type="text" name="goodsnum" value="<?php echo $arraynum["$i"];?>" class="inputcss" size="8" ><input type="hidden" name="id" value="<?php echo $infocart["id"];?>" ></div></td>
              <td height="22" bgcolor="#FFFFFF"><div align="center"><a href="javascript:form<?php echo $array[$i]?>.submit();" class="a1">��������</a>&nbsp;|&nbsp;<a href="delgoods.php?id=<?php echo $infocart["id"];?>" class="a1">ɾ������</a></div></td>
            </form>
			</tr>
			<?php 
			       $totalprice+=$infocart["price"]*$arraynum["$i"];
			     }
			   }
			}
			?>
          </table>
		  <br>
		  <table width="720" height="22" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
            <tr>
              <td bgcolor="#FFFFFF"><table width="720" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="247">&nbsp;<< &nbsp;<a href='morebccd.php' class='a1'>��������</a>&nbsp;&nbsp;<a href='shopping_setcartnull.php' class='a1'>��չ��ﳵ</a>&nbsp;>></td>
                  <td width="292">&nbsp;��Ʒ����ܼƣ�&nbsp;<?php echo number_format($totalprice,2);?>&nbsp;Ԫ</td>
                  <td width="181"><div align="center"><a href="shopping_cart_getuserinfo.php"><img src="images/bg_14(7).jpg" width="69" height="20" border="0"/></a></div></td>
                </tr>
              </table></td>
            </tr>
          </table>
		  <br>		  </td>
        </tr>
      </table>




</td>
        </tr></table>
<?php
include_once("bottom.php");
?>