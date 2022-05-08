<?php
include_once("top.php");
?>
<table width="755" height="15" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="755" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#2A4FA7"><table width="755" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="151" height="25" bgcolor="#99CCFF"><div align="center">学生姓名</div></td>
        <td width="147" bgcolor="#99CCFF"><div align="center">学号 </div></td>
        <td width="149" bgcolor="#99CCFF"><div align="center">语文</div></td>
        <td width="149" bgcolor="#99CCFF"><div align="center">数学</div></td>
        <td width="153" bgcolor="#99CCFF"><div align="center">外语</div></td>
      </tr>
	  <?php
	  include_once("conn.php");
	  $sql=$conn->query("select * from tb_sco,tb_stu where tb_sco.sid=tb_stu.id");
	  $info=$sql->fetch_array(MYSQLI_ASSOC);
	  if($info==NULL)
	   {
	     echo "暂无学生成绩信息!";
	   }
	   else
	    {
		 do
		  {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sname];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sno];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[yw];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sx];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[wy];?></div></td>
      </tr>
	  <?php
	     }
		 while($info=$sql->fetch_array(MYSQLI_ASSOC)); 
	  }
	  ?>
    </table></td>
  </tr>
</table>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
      『通用商品信息检索』 版权所有&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">吉林省**科技有任公司</a>! 未经授权禁止复制或建立镜像!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com" class="a1">www.mingrisoft.com</a>, All Rights Reserved! <br />
      <br />
      建议您在大于1024*768的分辨率下使用 </div></td>
  </tr>
</table>
</body>
</html>
