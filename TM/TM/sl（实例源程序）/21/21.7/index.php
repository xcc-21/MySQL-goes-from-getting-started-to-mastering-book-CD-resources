<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link  href="style.css" rel="stylesheet">
<title>Ӧ��mysql_num_rows()������ȡ��ѯ������еļ�¼��</title>
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
          <td height="79" align="right" valign="top"> <br>
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
				$info=mysql_fetch_object($sql);
				if ($_POST[Submit]=="��ѯ"){
					$txt_book=$_POST[txt_book];
					$sql=mysql_query("select * from tb_book where bookname like '%".trim($txt_book)."%'"); 	//���ѡ�������Ϊ"like",�����ģ����ѯ
					$info=mysql_fetch_object($sql);
				}
				if($info==false){          //�����������Ϣ�����ڣ��������Ӧ����ʾ��Ϣ
				    echo "<div align='center' style='color:#FF0000; font-size:12px'>�Բ�����������ͼ����Ϣ������!</div>";
				}
				do{
			  ?>
                <tr align="left" bgcolor="#FFFFFF">
                  <td height="20" align="center"><?php echo $info->id; ?></td>
                  <td >&nbsp;<?php echo $info->bookname; ?></td>
                  <td align="center"><?php echo $info->issuDate; ?></td>
                  <td align="center"><?php echo $info->price; ?></td>
                  <td align="center">&nbsp;<?php echo $info->maker; ?></td>
                  <td>&nbsp;<?php echo $info->publisher; ?></td>
                </tr>
                <?php
				}while($info=mysql_fetch_object($sql));
				?>
            </table>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ҵ���ؼ�¼&nbsp;<?php $nums=mysql_num_rows($sql);echo $nums;?>&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
      </table>
    <br></td> 
  </tr> 
</table>
</body>
</html>
