<?php
include_once("top.php");
?>
<table width="870" height="30" align="center" background="images/bg_14(1).jpg"><tr><td width="129" rowspan="2">&nbsp;</td>
    <td width="729"></td>
</tr>
  <tr>
    <td><span class="a9">�����û�ע����Ϣ</span></td>
  </tr>
</table>
<table width="870" align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF">
<?php
		$usernc=$_SESSION["unc"];
		if($usernc==""){
			echo "<script>window.location.href='register.php';</script>";
			exit;
		}
        $sql=mysql_query("select * from tb_user where usernc='".$usernc."'",$conn);
        $info=mysql_fetch_array($sql);
        ?>
                              <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                                <script language="JavaScript" type="text/javascript">
		   function chkinput(form){
		    
		     if(form.truename.value==""){
			   alert("����д������ʵ������");
			   form.truename.select();
			   return(false);
			 }
	
             if(form.sex.value==""){
			    alert("��ѡ�������Ա�");
			    form.sex.focus();
			    return(false);
			  }
		     if(form.email.value=="")
	          {
	             alert("������E-mail��ַ!");
	             form.email.select();
	             return(false);
	            }
	        var i=form.email.value.indexOf("@");
	        var j=form.email.value.indexOf(".");
	       if((i<0)||(i-j>0)||(j<0))
	        {
              alert("��������ȷ��E-mail��ַ!");
	          form.email.select();
	          return(false);
	        }
		   
		    if(form.tel.value==""){
			   alert("����д��ϵ�绰��");
			   form.tel.select();
			   return(false);
			 }
		  
		   
		     if(form.yb.value==""){
			   alert("����д�ʱ��ַ��");
			   form.yb.select();
			   return(false);
			 }
		    if(isNaN(form.yb.value)==true){
			
			   alert("�ʱ�ֻ����������ɣ�");
			   form.yb.select();
			   return(false);
			}
		   
		    if(form.yb.value.length!=6){
			
			   alert("�ʱ೤��ֻ��Ϊ6λ��");
			   form.yb.select();
			   return(false);
			
			}
		   
		    if(form.qq.value==""){
			
			   alert("����д����QQ���룡");
			   form.qq.select();
			   return(false);
			
			}
		   
		     if(isNaN(form.qq.value)==true){
			
			   alert("QQ��ֻ����������ɣ�");
			   form.qq.select();
			   return(false);
			}
			
			if(form.address.value==""){
			
			   alert("����д������ϵ��ַ��");
			   form.address.select();
			   return(false);
			}
		   
		    if(form.question.value==""){
			
			   alert("��ѡ���һ��������⣡");
			   form.question.focus();
			   return(false);
			}
			if(form.answer.value==""){
			
			   alert("����д�һ�����𰸣�");
			   form.answer.select();
			   return(false);
			}
		 
		    
			
		    return(true);
		   }
		 
		 </script>
                                <form action="saveedituserinfo.php" method="post" name="form1" id="form1" onsubmit="return chkinput(this)">
                                  <tr>
                                    <td width="101" height="30"><div align="center">�û�����</div></td>
                                    <td width="499">&nbsp;<?php echo $_SESSION["unc"];?></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">��ʵ������</div></td>
                                    <td height="30">&nbsp;
                                        <input type="text" name="truename" size="25" class="inputcss" value="<?php echo $info[truename];?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">�Ա�</div></td>
                                    <td height="30">&nbsp;
                                        <select name="sex" class="inputcss">
                                          <option selected="selected" value="">��ѡ��</option>
                                          <option value="��" <?php if($info[sex]=="��") echo "selected=selected"?>>��</option>
                                          <option value="Ů" <?php if($info[sex]=="Ů") echo "selected=selected"?>>Ů</option>
                                      </select></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">�����ַ��</div></td>
                                    <td height="30">&nbsp;
                                        <input type="text" name="email" size="25" class="inputcss" value="<?php echo $info[email];?>" />
                                      &nbsp;(Ϊ�˱��ڹ�����Ա������ϵ������д��ȷ��E-mail��ַ��)</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">��ϵ�绰��</div></td>
                                    <td height="30">&nbsp;
                                        <input type="text" name="tel" size="25" class="inputcss" value="<?php echo $info[tel];?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">�ʱࣺ</div></td>
                                    <td height="30">&nbsp;
                                        <input type="text" name="yb" size="25" class="inputcss" value="<?php echo $info[yb];?>" />
                                      &nbsp;(�ʱ�ֻ����������ɣ�����Ϊ6λ!)</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">QQ���룺</div></td>
                                    <td height="30">&nbsp;
                                        <input type="text" name="qq" size="25" class="inputcss" value="<?php echo $info[qq];?>" />
                                      &nbsp;(QQ��ֻ�����������!)</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">��ͥסַ��</div></td>
                                    <td height="30">&nbsp;
                                        <input type="text" name="address" size="35" class="inputcss" value="<?php echo $info[address];?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">���뱣�����⣺</div></td>
                                    <td height="30">&nbsp;
                                        <select name="question">
                                          <option value="">��ѡ��һ������</option>
                                          <option value="�ҾͶ��ĵ�һ��ѧУ�����ƣ�" <?php if($info[question]=="�ҾͶ��ĵ�һ��ѧУ�����ƣ�") echo "selected=selected"?>>�ҾͶ��ĵ�һ��ѧУ�����ƣ�</option>
                                          <option  value="����ϲ���������˶���ʲô��"<?php if($info[question]=="����ϲ���������˶���ʲô��") echo "selected=selected"?>>����ϲ���������˶���ʲô��</option>
                                          <option value="����ϲ�����˶�Ա��˭��" <?php if($info[question]=="����ϲ�����˶�Ա��˭��") echo "selected=selected"?>>����ϲ�����˶�Ա��˭��</option>
                                          <option value="����ϲ������Ʒ�����ƣ�" <?php if($info[question]=="����ϲ������Ʒ�����ƣ�") echo "selected=selected"?>>����ϲ������Ʒ�����ƣ�</option>
                                          <option value="����ϲ���ĸ�����" <?php if($info[question]=="����ϲ���ĸ�����") echo "selected=selected"?>>����ϲ���ĸ�����</option>
                                          <option value="����ϲ����ʳ�" <?php if($info[question]=="����ϲ����ʳ�") echo "selected=selected"?>>����ϲ����ʳ�</option>
                                          <option value="������˵����֣�" <?php if($info[question]=="������˵����֣�") echo "selected=selected"?>>������˵����֣�</option>
                                          <option value="����ĵ�Ӱ��" <?php if($info[question]=="����ĵ�Ӱ��") echo "selected=selected"?>>����ĵ�Ӱ��</option>
                                          <option value="����������գ�" <?php if($info[question]=="����������գ�") echo "selected=selected"?>>����������գ�</option>
                                          <option value="�ҵĳ������ڣ�" <?php if($info[question]=="�ҵĳ������ڣ�") echo "selected=selected"?>>�ҵĳ������ڣ�</option>
                                      </select></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">���Ĵ𰸣�</div></td>
                                    <td height="30">&nbsp;
                                        <input type="text" name="answer" size="35" class="inputcss"  value="<?php echo $info[answer];?>" />
                                      &nbsp;(Ϊ���ܹ��һض�ʧ�����룬���ס�ô𰸣�)</td>
                                  </tr>
                                  <tr>
                                    <td height="50" colspan="2"><div align="center">
                                        <input type="hidden" name="usernc" value="<?php echo $_SESSION["unc"];?>" />
                                        <input type="submit" name="submit"   value="����ע����Ϣ" />
                                      &nbsp;&nbsp;
                                      <input name="reset" type="reset"  value="ȡ������" />
                                    </div></td>
                                  </tr>
                                </form>
                              </table>
</td></tr></table>
<?php
include_once("bottom.php");
?>
