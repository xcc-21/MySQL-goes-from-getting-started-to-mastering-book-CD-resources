<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link  href="style.css" rel="stylesheet">
<title>Ӧ��mysql_fetch_row()���������������л�ȡ��Ϣ</title>
</head>
<body>
<table width="609" height="134"  border="1" cellpadding="0" cellspacing="0" bgcolor="#9E7DB4" align="center"> 
<form name="myform" method="post" action="">
    <tr> 
	  <td width="605" height="51" bgcolor="#CC99FF"><div align="center">������ͼ������
	      <input name="txt_book" type="text" id="txt_book" size="25" > 
	      &nbsp;
          <input type="submit" name="Submit" value="��ѯ">
	  </div></td>
  </tr>
</form>
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td height="81">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="79" align="center" valign="top"> <br>
             <table width="572"  border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#625D59">
                <tr align="center" bgcolor="#CC99FF">
                  <td width="46" height="20">���</td>
                  <td width="167">ͼ������</td>
                  <td width="90">����ʱ��</td>
                  <td width="70">ͼ�鶨��</td>
                  <td width="78">����</td>
                  <td width="114">������</td>
               </tr>
                <?php
				$link=mysql_connect("localhost","root","root") or die("���ݿ�����ʧ��".mysql_error());
				mysql_select_db("db_database21",$link);
				mysql_query("set names gb2312");
				$sql=mysql_query("select * from tb_book");
				$row=mysql_fetch_row($sql);
				if ($_POST[Submit]=="��ѯ"){
					$txt_book=$_POST[txt_book];
					$sql=mysql_query("select * from tb_book where bookname like '%".trim($txt_book)."%'"); 	//���ѡ�������Ϊ"like",�����ģ����ѯ
					$row=mysql_fetch_row($sql);
					}			
				if($row==false){          //�����������Ϣ�����ڣ��������Ӧ����ʾ��Ϣ
				    echo "<div align='center' style='color:#FF0000; font-size:12px'>�Բ�����������ͼ����Ϣ������!</div>";
				}
				do{
			  ?>
                <tr align="left" bgcolor="#FFFFFF">
                  <td height="20" align="center"><?php echo $row[0]; ?></td>
                  <td >&nbsp;<?php echo $row[1]; ?></td>
                  <td align="center"><?php echo $row[2]; ?></td>
                  <td align="center"><?php echo $row[3]; ?></td>
                  <td align="center">&nbsp;<?php echo $row[4]; ?></td>
                  <td>&nbsp;<?php echo $row[5]; ?></td>
                </tr>
                <?php
				}while($row=mysql_fetch_row($sql));
				?>
            </table></td>
        </tr>
      </table>
    <br></td> 
  </tr> 
</table>
</body>
</html>
