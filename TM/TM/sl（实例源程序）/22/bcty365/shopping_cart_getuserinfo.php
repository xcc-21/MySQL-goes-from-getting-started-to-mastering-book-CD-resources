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
          <td bgcolor="#FFFFFF"> <form name="form11" method="post" action="savebuyuser.php" onsubmit="return(chkinput(this))"> 	


<table width="750" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><br>
		  
		  
		  <table width="680" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
           
		   
		   
		    <script language="javascript">
			    function chkinput(form){
				 if(form.recuser.value==""){
				   alert('�������ջ���������');
				   form.recuser.focus();
				   return(false);
				 }
				 
				 if(form.sex.value==""){
				   alert('��ѡ���ջ����Ա�');
				   form.sex.focus();
				   return(false);
				 }
				 
				  if(form.city.value==""){
				   alert('��ѡ���ջ������ڳ��У�');
				   form.city.focus();
				   return(false);
				 }
				 
				 if(form.address.value==""){
				   alert('�������ջ�����ϵ��ַ��');
				   form.address.focus();
				   return(false);
				 }
				  
				 if(form.yb.value==""){
				   alert('�������ջ����ʱ࣡');
				   form.yb.focus();
				   return(false);
				 }
				 
				 if(isNaN(form.yb.value)){
				   alert('�ʱ�ֻ����������ɣ�');
				   form.yb.focus();
				   return(false);
				 }
				 
				 if(form.yb.value.length!=6){
				   alert('�ʱ����6λ��ɣ�');
				   form.yb.focus();
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
				
				
				
				 if(form.mtel.value==""){
				   alert('�������ƶ��绰���룡');
				   form.mtel.focus();
				   return(false);
				 }
				 
			  	 if(form.gtel.value==""){
				   alert('������̶��绰���룡');
				   form.gtel.focus();
				   return(false);
				 }
	 
				 
			  return(true);
				
			}
			  
			  </script>
			  
            	   
		   
		    <tr>
              <td bgcolor="#FFFFFF">
 <table width="680" border="0" align="center" cellpadding="0" cellspacing="0">
			
			   
			    <tr>
                  <td height="40"><table width="80" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td bgcolor="#CCCCCC"><div align="center">�ջ�����Ϣ</div></td>
                    </tr>
                  </table></td>
                  <td colspan="3">&nbsp;<font color="#FF0000">*</font>&nbsp;<font color="#999999">�������ȷ��д���ĸ�����ϸ��Ϣ��</font></td>
                  </tr>
                <tr>
                  <td width="120" height="30"><div align="right">�ջ��ˣ�</div></td>
                  <td colspan="3">&nbsp;<input type="text" name="recuser" size="20" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="30"><div align="right">�Ա�</div></td>
                  <td height="30" colspan="3">&nbsp;<select name="sex">
                      <option value="" selected="selected">-��ѡ��-</option>
                      <option value="��">--��--</option>
                      <option value="Ů">--Ů--</option>
                    </select>                  </td>
                </tr>
				
				  <tr>
                  <td height="30"><div align="right">���ڳ��У�</div></td>
                  <td height="30" colspan="3">&nbsp;<select name="city">
                      <option value="" selected="selected">-��ѡ��-</option>
                       <?php
					     $sql=mysql_query("select city,id from tb_city order by addtime desc",$conn);
						 $info=mysql_fetch_array($sql);
						 if($info==false){
						   echo " <option >-���޳�����Ϣ-</option>";
						 
						 }else{
					       do{
					   ?>
					  
					    <option value="<?php echo $info[id];?>"><?php echo $info[city];?></option>
                       <?php
					     }while($info=mysql_fetch_array($sql)); 
					   }
					   ?>
                    </select>                 
					
					 </td>
                </tr>
				
                <tr>
                  <td height="30"><div align="right">��ϸ��ϵ��ַ��</div></td>
                  <td height="30" colspan="3">&nbsp;<input type="text" name="address" size="60" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="30"><div align="right">�������룺</div></td>
                  <td height="30" colspan="3">&nbsp;<input type="text" name="yb" size="20" class="inputcss"></td>
                </tr>
				<tr>
                  <td height="30"><div align="right">QQ���룺</div></td>
                  <td height="30" colspan="3">&nbsp;<input type="text" name="qq" size="20" class="inputcss"></td>
                </tr>
				<tr>
                  <td height="30"><div align="right">E-mail��</div></td>
                  <td height="30" colspan="3">&nbsp;<input type="text" name="email" size="20" class="inputcss"></td>
                </tr>
                <tr>
                  <td height="30">&nbsp;</td>
                  <td height="30" colspan="3">&nbsp;<font color="#FF0000">*</font>&nbsp;<font color="#999999">�������ȷ��д������ϵ��ַ���ʱ࣬��ȷ�������ͻ���˳���ﵽ��</font></td>
                  </tr>
                <tr>
                  <td height="30"><div align="right">�ƶ��绰��</div></td>
                  <td width="150" height="30">&nbsp;<input type="text" name="mtel" size="20" class="inputcss"></td>
                  <td width="67"><div align="right">�̶��绰��</div></td>
                  <td width="343">&nbsp;<input type="text" name="gtel" size="20" class="inputcss"></td>
                </tr>
                
               
				
				
              </table></td>
            </tr>
          </table><br>
		  <table width="680" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
  <tr>
    <td bgcolor="#FFFFFF"><table width="680" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="120" height="40"><table width="80" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#CCCCCC"><div align="center">�ʵݷ�ʽ</div></td>
          </tr>
        </table></td>
        <td width="560">&nbsp;<font color="#FF0000">*</font>&nbsp;<font color="#999999">��ѡ���ͻ���ʽ��</font></td>
      </tr>
      
      <tr>
        <td height="30">&nbsp;</td>
        <td height="30">
        
          <input type="radio" name="shfs" value="1" checked="checked"/>
          ��ͨ�ʵ�<br><br>
          <input type="radio" name="shfs" value="2" />
         �����ؿ�ר��&nbsp;EMS
    
        </td>
      </tr>
	  
	  <tr>
        <td height="10"></td>
        <td height="10">
        
    
        </td>
      </tr>
    </table></td>
  </tr>
</table>

		  
		  <br><table width="680" height="40" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
  <tr>
    <td bgcolor="#FFFFFF"><table width="680" height="40" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="120"><table width="80" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#CCCCCC"><div align="center">���ɶ���</div></td>
          </tr>
        </table></td>
        <td width="558">
      <input type="image"  src="images/bg_14(9).jpg">
    &nbsp;&nbsp;<img src="images/bg_14(13).jpg" width="69" height="20" onclick="form11.reset()" style="cursor:hand"/></td>
      </tr>
    </table></td>
    </tr>
</table>



</td>
        </tr>
      </table></form>
</td>
        </tr></table>
<?php
include_once("bottom.php");
?>