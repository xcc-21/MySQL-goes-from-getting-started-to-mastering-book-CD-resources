<?php
include_once("top.php");
?>
<table width="870" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
  <tr>
    <td bgcolor="#FFFFFF" valign="top"><table width="850" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
    </table>
     <table width="750" border="0" align="center" cellpadding="0" cellspacing="1">
                <tr>
                  <td bgcolor="#FFFFFF" valign="top">
<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0" background="images/lt_15(2).jpg">
<tr><td height="2"></td></tr>
          <tr>
            <td width="740" class="a9"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�û�¼��&nbsp;���</div></td>
            <td width="160"></td>
          </tr>
</table>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top"><?php
							 $usernc=trim($_POST[usernc]);
							 if($usernc==""){
							 echo "<script>window.location.href='register.php';</script>";
							 exit;
							 }
                             $sql=mysql_query("select usernc from tb_user where usernc='".$usernc."'",$conn);
                             $info=mysql_fetch_array($sql);
                             if($info!=false){
                            ?>
                              <table width="600" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td><div align="center"><font color="#FF0000">�Բ��������û����ѱ�����������ռ�ã�������ѡ��</font></div></td>
                                </tr>
                                <tr>
                                  <td><div align="center">
                                    <input name="button" type="button" onclick="window.location.href='register.php'" value="����" />
                                  </div></td>
                                </tr>
                              </table>
                            <?php
							}else{
							?>
                              <table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
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
		    if(form.xym.value==""){
			   alert("����д��֤�룡");
			   form.xym.select();
			   return(false);
			
			}
		    
			
		    return(true);
		   }
		 
		 </script>
                                <form action="savereginfo.php" method="post" name="form1" id="form1" onsubmit="return chkinput(this)">
                                  <tr>
                                    <td height="30" colspan="3"><div align="center"><font color="#FF0000"><br>���Ѿ��ɹ��������˱�վ���û�����</font>&nbsp;<font color="#0000FF"><?php echo $_POST["usernc"]?></font>&nbsp;<font color="#FF0000">���ע��Ϊ��վ���û�������Ӧ����д������Ϣ��</font><br><br><font color="#0000FF">ע�⣺����ע����Ϣ��Ϊ�������ݣ�</font></div></td>
                                  </tr>
                                  <tr>
                                    <td width="107" height="30"><div align="center">��ʵ������</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input type="text" name="truename" size="25" class="inputcss" />&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">�Ա�</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <select name="sex" class="inputcss">
                                          <option selected="selected" value="">��ѡ��</option>
                                          <option value="��">��</option>
                                          <option value="Ů">Ů</option>
                                      </select></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">�����ַ��</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input type="text" name="email" size="25" class="inputcss" />
                                      &nbsp;(Ϊ�˱��ڹ�����Ա������ϵ������д��ȷ��E-mail��ַ��)</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">��ϵ�绰��</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input type="text" name="tel" size="25" class="inputcss" /></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">�ʱࣺ</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input type="text" name="yb" size="25" class="inputcss" />
                                      &nbsp;(�ʱ�ֻ����������ɣ�����Ϊ6λ!)</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">QQ���룺</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input type="text" name="qq" size="25" class="inputcss" />
                                      &nbsp;(QQ��ֻ�����������!)</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">��ͥסַ��</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input type="text" name="address" size="35" class="inputcss" /></td>
                                  </tr>
								  
								  
								  
								  <tr>
          <td ><div align="center">ͷ��ѡ�� </div></td>
          <td width="100"  height="30">&nbsp;
		  <select name="photo" onchange="javascript:user_face.src=this.value">
                      <?php
					  for($i=0;$i<=11;$i++){
					  ?>
					   <option value="<?php echo "images/face/".$i.".gif"?>"><?php echo $i.".gif"?></option>
					  <?php
					  }
					  ?>
            </select></td>
     
          <td width="393"><img id=user_face src="images/face/0.gif" width="60" height="60"></td>
								  </tr>
								  
								  
								  
								  
								  
								  
                                  <tr>

                                    <td height="30"><div align="center">���뱣�����⣺</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <select name="question">
                                          <option value="" selected="selected">��ѡ��һ������</option>
                                          <option value="�ҾͶ��ĵ�һ��ѧУ�����ƣ�">�ҾͶ��ĵ�һ��ѧУ�����ƣ�</option>
                                          <option  value="����ϲ���������˶���ʲô��">����ϲ���������˶���ʲô��</option>
                                          <option value="����ϲ�����˶�Ա��˭��">����ϲ�����˶�Ա��˭��</option>
                                          <option value="����ϲ������Ʒ�����ƣ�">����ϲ������Ʒ�����ƣ�</option>
                                          <option value="����ϲ���ĸ�����">����ϲ���ĸ�����</option>
                                          <option value="����ϲ����ʳ�">����ϲ����ʳ�</option>
                                          <option value="������˵����֣�">������˵����֣�</option>
                                          <option value="����ĵ�Ӱ��">����ĵ�Ӱ��</option>
                                          <option value="����������գ�">����������գ�</option>
                                          <option value="�ҵĳ������ڣ�">�ҵĳ������ڣ�</option>
                                      </select></td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">���Ĵ𰸣�</div></td>
                                    <td height="30" colspan="2">&nbsp;
                                        <input type="text" name="answer" size="35" class="inputcss" />
                                      &nbsp;(Ϊ���ܹ��һض�ʧ�����룬���ס�ô𰸣�)</td>
                                  </tr>
                                  <tr>
                                    <td height="30"><div align="center">Ч���룺</div></td>
                                    <td height="30" colspan="2"><table width="400" height="30" border="0" align="left" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="162">&nbsp;
                                            <input type="text" name="xym" size="20" class="inputcss" /></td>
                                          <td width="238"><?php
							   $num=intval(mt_rand(1000,9999));
							   
							   for($i=0;$i<4;$i++)
							   {
							    echo "<img src=images/code/".substr(strval($num),$i,1).".gif>";
							   }
							?></td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td height="50" colspan="3"><div align="center">
                                        <input type="hidden" value="<?php echo $num;?>" name="num" />
                                        <input type="hidden" name="usernc" value="<?php echo $_POST["usernc"];?>" />
                                        <input type="hidden" name="pwd1" value="<?php echo $_POST["userpwd1"];?>" />
                                        <input type="submit" name="submit"  value="�ύע����Ϣ" />
                                      &nbsp;&nbsp;
                                      <input name="reset" type="reset"  value="������дע����Ϣ" />
                                    </div></td>
                                  </tr>
                                </form>
                            </table>
                            <?php
							}
							?>
                          </td>
                        </tr>
                    </table></td>
                </tr>
            </table>
      <table id="showget_u_p" style="display:none" width="700" height="125" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="20">&nbsp;</td>
          </tr>
          <tr>
            <td height="120" bgcolor="#137CE6"><table width="700" height="120" border="0" align="center" cellpadding="0" cellspacing="1">
                <tr>
                  <td bgcolor="#FFFFFF" valign="top"><table width="700" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="40"><img src="images/top.gif" width="40" height="30" /></td>
                        <td width="660" background="images/top_background.gif"><font color="#FFFFFF">��¼��Ϣ¼��</font></td>
                      </tr>
                    </table>
                      <table width="350" height="120" border="0" align="center" cellpadding="0" cellspacing="0">
                        <script language="JavaScript" type="text/javascript">
						  function chk_reg_input(form){
						    if(form.usernc.value==""){
							  alert("�������û�����");
							  form.usernc.select();
							  return(false);
							}
							 if(form.userpwd1.value==""){
							  alert("�������¼���룡");
							  form.userpwd1.select();
							  return(false);
							}
							 if(form.userpwd2.value==""){
							  alert("������ȷ�����룡");
							  form.userpwd2.select();
							  return(false);
							}
							 if(form.userpwd1.value!=form.userpwd1.value){
							  alert("��¼������ȷ�����벻ͬ��");
							  form.userpwd1.select();
							  return(false);
							}
							if(form.userpwd1.value.length<6){
							  alert("��¼����Ӧ����6λ��");
							  form.userpwd1.select();
							  return(false);
							}
						  return(true);
						  }
						
						</script>
                        <script language="JavaScript" type="text/javascript">
                         function open_chknc(x)
                          {
                          window.open("chkusernc.php?nc="+x,"newframe","top=250,left=450,width=150,height=100,menubar=no,toobar=no,location=no,scrollbars=no,resizeable=no");
                          }
                      </script>
                        <form action="getuserinfo.php" method="post" name="from_reg" id="from_reg" onsubmit="return chk_reg_input(this)">
                          <tr>
                            <td width="81" height="30"><div align="center">��&nbsp;��&nbsp;����</div></td>
                            <td width="184">&nbsp;
                                <input type="text" name="usernc" size="25" class="inputcss" maxlength="100" /></td>
                            <td width="85"><input name="button2" type="button" class="buttoncss" onclick="open_chknc(from_reg.usernc.value)" value="�鿴������" /></td>
                          </tr>
                          <tr>
                            <td height="30"><div align="center">��¼���룺</div></td>
                            <td height="30" colspan="2">&nbsp;
                                <input type="text" name="userpwd1" size="25" class="inputcss" maxlength="100" /></td>
                          </tr>
                          <tr>
                            <td height="30"><div align="center">ȷ�����룺</div></td>
                            <td height="30" colspan="2">&nbsp;
                                <input type="text" name="userpwd2" size="25" class="inputcss" maxlength="100" /></td>
                          </tr>
                          <tr>
                            <td height="30" colspan="3"><div align="center">
                              <input name="submit" type="submit" value="��һ��" />
                              &nbsp;&nbsp;
                              <input name="reset" type="reset" value="��д" />
                            </div></td>
                          </tr>
                        </form>
                      </table></td>
                </tr>
            </table></td>
          </tr>
      </table>
      <table width="805" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td></td>
          </tr>
      </table></td>
  </tr>
</table>
<?php
include_once("bottom.php");
?>
