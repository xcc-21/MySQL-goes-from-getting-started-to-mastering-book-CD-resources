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
	<script language="javascript">
	  function chkinput(form){
	  
	    if(form.name.value==""){
		   alert("���������������ƣ�");
		   form.name.focus();
		   return(false);
		 
		}
		
		
		  if(form.typeid.value==""){
		   alert("��ѡ�����������ƣ�");
		   form.typeid.focus();
		   return(false);
		 
		}
		
		  if(form.bbid.value==""){
		   alert("��ѡ��汾����");
		   form.bbid.focus();
		   return(false);
		 
		}
		
		  if(form.address.value==""){
		   alert("��ѡ����������ַ��");
		   form.address.focus();
		   return(false);
		 
		}
		
	    if(form.content.value==""){
		   alert("��ѡ�����������ݼ�˵����");
		   form.content.focus();
		   return(false);
		 
		}
		
		return(true);
		
		
	  }
	
	</script>
 <table width="565" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
       <form name="form1" method="post" action="savesj.php" enctype="multipart/form-data" onSubmit="return chkinput(this)">
	   
	    <tr>
          <td height="25" colspan="2" class="a5" align="center"><?php echo $htgl;?></td>
        </tr>
        <tr>
          <td width="120" height="25" bgcolor="#FFFFFF"><div align="center">���������ƣ�</div></td>
          <td width="397" bgcolor="#FFFFFF">&nbsp;<input type="text" name="name" size="25" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">�������</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<select name="typeid" class="txt_grey">
                <option value="" selected="selected">��ѡ��</option>
				<?php
				 include_once("../conn/conn.php");
				 $sql=mysql_query("select * from tb_type order by createtime desc",$conn);
				 $info=mysql_fetch_array($sql);
				 if($info==false)
				  {
				   echo "<option >�������</option>";
				  }
				  else
				   {
				      do
				       {
					      echo "<option value=".$info[id].">".$info[typename]."</option>";
					
					   }
				      while($info=mysql_fetch_array($sql));
			    	}		
				?>
				
              </select></td>
        </tr>
		
		<tr>
          <td width="120" height="25" bgcolor="#FFFFFF"><div align="center">�汾���ƣ�</div></td>
          <td width="397" bgcolor="#FFFFFF">&nbsp;<select name="bbid">
            
			<option value="">��ѡ��汾����</option>
			
			<?php
			  $sql3=mysql_query("select * from tb_bb order by createtime desc ",$conn);
			  $info3=mysql_fetch_array($sql3); 
			  if($info3==false){
			    echo  "<option>���ް汾��Ϣ</option>";
			  }else{
			    do{
			 ?>
			
			  <option  value="<?php echo $info3[id];?>"><?php echo $info3[bbname];?></option>
			
			<?php
			     }while($info3=mysql_fetch_array($sql3));
			}
			?>
			
          </select></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">���ص�ַ��</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="file" name="address" size="25" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">˵������飺</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<textarea name="content" cols="60" rows="5" class="textarea"></textarea></td>
        </tr>
        <tr>
          <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="�ύ" class="btn_grey">&nbsp;&nbsp;<input type="reset" value="��д" class="btn_grey"></div></td>
        </tr>
		
   </form>
</table>  
</body>
</html>
