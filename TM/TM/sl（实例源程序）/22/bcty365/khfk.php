<table width="635" height="300" border="0" align="center" cellpadding="0" cellspacing="0">
  <script language="javascript">
		     function chkinput(form){
			   if(form.title.value==""){
			     alert("�������������⣡");
			     form.title.focus();
				 return(false);
			   }
			   if(form.type.value==""){
			     alert("��ѡ���������ͣ�");
			     form.type.focus();
				 return(false);
			   }
			   if(form.content.value==""){
			     alert("�������������ݣ�");
			     form.content.focus();
				 return(false);
			   }
			   if(form.xym.value==""){
			     alert("������Ч���룡");
			     form.xym.focus();
				 return(false);
			   }
			   
			  return(true);   
			   
			 }
		   
		   </script>
  <form name="form1" method="post" action="saveleaveword.php" onsubmit="return chkinput(this)">
    <tr>
      <td width="111" height="30"><div align="center">��&nbsp;&nbsp;�⣺</div></td>
      <td colspan="3"><input type="text" name="title" size="55" class="inputcss"></td>
    </tr>
    <tr>
      <td height="30"><div align="center">��&nbsp;&nbsp;��</div></td>
      <td height="30" colspan="3"><select name="type">
        <option selected="selected" value="">��ѡ��</option>
        <option value="1">�ҵ�����</option>
        <option value="2">�ҵĽ���</option>
      </select>
      </td>
    </tr>
    <tr>
      <td height="130"><div align="center">��&nbsp;&nbsp;�ݣ�</div></td>
      <td height="30" colspan="3"><textarea name="content" rows="8" cols="65"></textarea></td>
    </tr>
    <tr>
      <td height="30"><div align="center">Ч���룺</div></td>
      <td width="69" height="30"><img src="xym.php"></td>
      <td width="184"><input type="text" name="xym" size="5"></td>
      <td width="271"><input name="submit" type="submit" value="�ύ" />
        &nbsp;&nbsp;
        <input name="reset" type="reset" value="��д" /></td>
    </tr>
  </form>
</table>
