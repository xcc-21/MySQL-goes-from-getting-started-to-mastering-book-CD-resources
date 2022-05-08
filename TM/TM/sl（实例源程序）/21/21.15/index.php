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
        <td width="115" height="25" bgcolor="#99CCFF"><div align="center">学生姓名</div></td>
        <td width="113" bgcolor="#99CCFF"><div align="center">学号 </div></td>
        <td width="106" bgcolor="#99CCFF"><div align="center">年龄</div></td>
        <td width="149" bgcolor="#99CCFF"><div align="center">住址</div></td>
        <td width="189" bgcolor="#99CCFF"><div align="center">身份证号</div></td>
        <td width="76" bgcolor="#99CCFF"><div align="center">操作</div></td>
      </tr>
	 <?php
	 include_once("conn.php");
	$sql=$conn->query("select * from tb_stu"); 
	$info=$sql->fetch_array(MYSQLI_ASSOC);
	if($info==NULL)
	 {
	   echo "暂无学生信息!";
	 } 
	 else
	 {
	   do
	    {
	 ?> 
	 
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sname];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sno];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sage];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[saddress];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[ssfzh];?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><a href="javascript:if(window.confirm('确定删除该学生信息么?')==true){window.location.href='delete.php?id=<?php echo $info[id];?>';}">删除</a></div></td>
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
     版权所有&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">吉林省**科技有限公司</a>! 未经授权禁止复制或建立镜像!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com" class="a1">www.mingrisoft.com</a>, All Rights Reserved! <br />
      <br />
      建议您在大于1024*768的分辨率下使用 </div></td>
  </tr>
</table>
</body>
</html>
