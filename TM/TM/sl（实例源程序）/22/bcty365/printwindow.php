<?php
include_once("conn/conn.php");
include_once("function.php");
$ddnumber=$_GET["ddno"];
$sql=mysql_query("select * from tb_dd where ddnumber='".$ddnumber."'",$conn);
$info=mysql_fetch_array($sql);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<script>     
  function   printview()     
  {     
  document.all.WebBrowser1.ExecWB(7,1) ;
  window.close();  
  }     
 </script>     
 <object   ID='WebBrowser1'   WIDTH=0   HEIGHT=0   CLASSID='CLSID:8856F961-340A-11D0-A96B-00C04FD705A2'></object>
 

<body topmargin="0" leftmargin="0" bottommargin="0" onLoad="
 <?php
 if($_GET["pv"]=="p"){
 ?>
   window.print();
 <?php
  }elseif($_GET["pv"]=="v"){
 ?>
   printview()  
 <?php 
  }
 ?> 
  ">

<table width="630" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
           
		
             
		   
		   
		    <tr>
              <td bgcolor="#FFFFFF"><table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="25" colspan="2"><table width="250" height="20" border="0" align="left" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="15" bgcolor="#FFFFFF"><div align="center"></div></td>
                      <td width="235" bgcolor="#CCCCCC"><div align="center">����ʡ���տƼ����޹�˾-��̴ʵ䶩��</div></td>
                    </tr>
                  </table></td>
                  <td height="25">&nbsp;</td>
                  <td height="25"><?php echo $info["createtime"];?></td>
                </tr>
				<tr>
                  <td height="1" colspan="4" valign="top"><hr size="1" color="#CCCCCC" width="600"></td>
                  </tr>
                <tr>
                  <td width="125" height="18"><div align="right">�����ţ�</div></td>
                  <td height="18" colspan="3">&nbsp;<?php echo $info["ddnumber"];?></td>
                </tr>
                <tr>
                  <td height="18"><div align="right">�ջ��ˣ�</div></td>
                  <td width="222" height="18">&nbsp;<?php echo $info["recuser"];?></td>
                  <td width="125" height="18"><div align="right">�ʱࣺ</div></td>
                  <td width="208" height="18">&nbsp;<?php echo $info["yb"];?></td>
                </tr>
                <tr>
                  <td height="18"><div align="right">�ƶ��绰��</div></td>
                  <td height="18">&nbsp;<?php echo $info["mtel"];?></td>
                  <td height="18"><div align="right">�̶��绰��</div></td>
                  <td height="18">&nbsp;<?php echo $info["gtel"];?></td>
                </tr>
                <tr>
                  <td height="18"><div align="right">��ϵ��ַ��</div></td>
                  <td height="18" colspan="3">&nbsp;<?php echo unhtml($info["address"]);?></td>
                  </tr>
                <tr>
                  <td height="20" colspan="4"><br><table width="550" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                    <tr>
                      <td height="18" bgcolor="#CCCCCC"><div align="center">��Ʒ����</div></td>
                      <td bgcolor="#CCCCCC"><div align="center">���ۣ�Ԫ��</div></td>
                      <td bgcolor="#CCCCCC"><div align="center">����</div></td>
                      <td bgcolor="#CCCCCC"><div align="center">С�ƣ�Ԫ��</div></td>
                    </tr>
             <?php
			
			 $array=explode("@",$info["spc"]);
			 $arraynum=explode("@",$info["slc"]);
			 $markid=0;
			 for($i=0;$i<count($array);$i++){
			   if($array[$i]!=""){
			     $markid++;
			   }
			 }
			
			 if($markid==0){ 
			?>
					
					
					
				     <tr>
                      <td height="18" colspan="4" bgcolor="#FFFFFF"><div align="center">������Ʒ��Ϣ��</div></td>
                     </tr>
			<?php
			}else{
		       $totalprice=0;
			   $gnum=0;
			   for($i=0;$i<count($array);$i++){
			     if($array[$i]!=""){
				   $sqldd=mysql_query("select * from tb_bccd where id='".$array[$i]."'",$conn);
				   $infodd=mysql_fetch_array($sqldd)
			?>	 
					
					 <tr>
                      <td height="18" bgcolor="#FFFFFF">&nbsp;<?php echo unhtml($infodd["bccdname"]);?></td>
                      <td height="18" bgcolor="#FFFFFF"><div align="center"><?php echo number_format($infodd["price"],2);?></div></td>
                      <td height="18" bgcolor="#FFFFFF"><div align="center"><?php echo $arraynum[$i];?></div></td>
                      <td height="18" bgcolor="#FFFFFF"><div align="center"><?php echo number_format($infodd["price"]*$arraynum[$i],2);?></div></td>
                    </tr>
			<?php 
			       $totalprice+=$infodd["price"]*$arraynum["$i"];
				   $gnum++;
			     }
			   }
			}
			?>	
					
                  </table>
				  
				    <table width="550" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="25">&nbsp;</td>
                        <td width="60" height="25"><div align="center">��Ʒ�ܼƣ�</div></td>
                        <td width="112">&nbsp;<?php echo number_format($totalprice,2);?>&nbsp;Ԫ</td>
                      </tr>
                    
                      <tr>
                        <td height="25">&nbsp;</td>
                        <td height="25"><div align="right">�ʷѣ�</div></td>
                        <td height="25">&nbsp;<?php echo number_format($info["yprice"],2);?>&nbsp;Ԫ</td>
                      </tr>
					  <tr>
                        <td width="378" height="1"></td>
                        <td height="1" colspan="2" bgcolor="#CCCCCC"></td>
                      </tr>
					  <tr>
                        <td height="25" colspan="2"><div align="right"><strong>����Ҫ֧���Ľ���ܼ�Ϊ��</strong></div></td>
                        <td width="112">&nbsp;<?php echo number_format($info["totalprice"],2);?>&nbsp;Ԫ</td>
                      </tr>
                    </table>
				    </td>
                </tr>
				
                <tr>
                  <td height="1" colspan="4" valign="top"><hr size="1" color="#CCCCCC" width="600"></td>
                 </tr>
				 <tr>
                  <td height="2" colspan="4" valign="top"></td>
                 </tr>
              </table></td>
		    </tr>
          </table>
</body>
</html>
