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
		   if(form.bccdname.value==""){
		     alert("�������̴ʵ����ƣ�");
		     form.bccdname.focus();
			 return(false);
		   }
		   
		   if(form.owner.value==""){
		     alert("�������Ȩ��Ϣ��");
		     form.owner.focus();
			 return(false);
		   }
		   
		   if(form.imageaddress.value==""){
		     alert("��ѡ���̴ʵ�ͼƬ��");
		     form.imageaddress.focus();
			 return(false);
		   }
		   
		     if(form.typeid.value==""){
		     alert("��ѡ���̴ʵ��������");
		     form.typeid.focus();
			 return(false);
		   }
		   
		    if(form.content.value==""){
		     alert("������ñ�̴ʵ����ݼ�飡");
		     form.content.focus();
			 return(false);
		   }
		    
		   if(form.samepart.value==""){
		     alert("�������̴ʵ䲻ͬ�汾����ͬ�㣡");
		     form.samepart.focus();
			 return(false);
		   }
		   
		 return(true);
		 
		 
		 }
	  
	  
	  </script>
<table width="565" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#327387">
        
		<form name="form1" method="post" action="savebccd.php" onSubmit="return chkinput(this)" enctype="multipart/form-data">
		
		<tr>
		  <td colspan="2" align="center" class="a5"><?php echo $htgl;?></td>
	     </tr>
		<tr>
          <td width="117" height="25" bgcolor="#FFFFFF"><div align="center">��̴ʵ����ƣ�</div></td>
          <td width="435" bgcolor="#FFFFFF">&nbsp;<input type="text" name="bccdname" size="25" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">��Ȩ���У�</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="owner" size="25" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">ͼƬ·����</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="file" name="imageaddress" size="25" class="txt_grey"></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">�������</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;<select name="typeid" class="inputcss">
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
          <td height="140" bgcolor="#FFFFFF"><div align="center">���ݼ�飺</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;
          <textarea name="content" rows="10" cols="65" class="textarea"></textarea></td>
        </tr>
        <tr>
          <td height="140" bgcolor="#FFFFFF"><div align="center">��ͬ�汾��ͬ�㣺</div></td>
          <td height="25" bgcolor="#FFFFFF">&nbsp;
          <textarea name="samepart" rows="10" cols="65" class="textarea"></textarea></td>
        </tr>
        <tr>
          <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="���" class="btn_grey">&nbsp;&nbsp;<input type="reset" value="��д" class="btn_grey"></div></td>
        </tr>
		</form>
      </table>
</body>
</html>
