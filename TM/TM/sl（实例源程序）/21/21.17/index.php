<?php session_start();include("conn/conn.php"); if ($_GET[page]=="") {$_GET[page]=1;};?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ѯ����ķ�ҳ��ʾ</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
.STYLE2 {font-size: 13px}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
</head>
<script language="javascript">
  function chk(form){
    if(form.page.value<=0||form.page.value>form.pages.value){
	  alert("�������ҳ����Ч!!");
	  form.page.focus();
	  return(false);
	}
	return(true);
  }
</script>
<body>
<table width="500" border="0" cellpadding="0" cellspacing="1" bgcolor="#11DFF0">
  <tr>
    <td width="100" height="25" align="center" bgcolor="#11DFF0" class="STYLE2">����</td>
    <td width="100" align="center" bgcolor="#11DFF0" class="STYLE2">���</td>
    <td width="125" align="center" bgcolor="#11DFF0" class="STYLE2">�绰</td>
    <td width="175" align="center" bgcolor="#11DFF0" class="STYLE2">��ַ</td>
  </tr>
  <?php 
   if($_GET[page]){
    $page_size=2;
    $query="select count(*) as total from tb_insert";
	$result=mysql_query($query);
    $message_count=mysql_result($result,0,"total");
    $page_count=ceil($message_count/$page_size);	
    $offset=($_GET[page]-1)*$page_size;			 
    $query="select * from tb_insert where id order by id desc limit $offset, $page_size";			
	$result=mysql_query($query);
	while ($myrow=@mysql_fetch_array($result)){
	?>
  <tr>
    <td height="25" align="center" bgcolor="#FFFFFF"><span class="STYLE2"><?php echo $myrow[name];?></span></td>
    <td align="center" bgcolor="#FFFFFF"><span class="STYLE2"><?php echo $myrow[number];?></span></td>
    <td align="center" bgcolor="#FFFFFF"><span class="STYLE2"><?php echo $myrow[tel];?></span></td>
    <td align="center" bgcolor="#FFFFFF"><span class="STYLE2"><?php echo $myrow[address];?></span></td>
  </tr>
  <?php }}?>
</table>
<form name="form1" method="get" action="index.php" onSubmit="return chk(this)">
<table width="500" border="1" cellpadding="0" cellspacing="0" bgcolor="#11DFF0">
  <tr> 
   <td width="42%" align="center" valign="middle"><span class="STYLE1">&nbsp;&nbsp;ҳ�Σ�<?php echo $_GET[page];?>
      / <?php echo $page_count;?> ҳ ��¼��<?php echo $message_count;?> �� </span></td>
   <td width="58%" height="28" align="left" valign="middle"><span class="STYLE1"> &nbsp;��ҳ�� 
      <?php
	  		  if($_GET[page]!=1)
				   {
				     echo  "<a href=index.php?page=1>��ҳ</a>&nbsp;";
					 echo "<a href=index.php?page=".($_GET[page]-1).">��һҳ</a>&nbsp;";
				   }
				  if($_GET[page]<$page_count)
				   {
				        echo "<a href=index.php?page=".($_GET[page]+1).">��һҳ</a>&nbsp;";
				        echo  "<a href=index.php?page=".$page_count.">βҳ</a>";
				   if($_GET[page]<= $page_count and $_GET[page]>0){
				        echo  "<a href=index.php?page=".$_GET[page]."></a>";
				   }
				   }
				   
				?>	  
				 
      <input name="page" type="text" size="3">
      <input type="hidden" name="pages" value="<?php echo $page_count;?>">
      <input type="submit" name="Submit" value="��ת">
	
   </span>    </td>
  </tr>
  </table>
</form>
</body>
</html>
