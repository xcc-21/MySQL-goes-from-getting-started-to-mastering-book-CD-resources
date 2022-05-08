
<?php

$host = "127.0.0.1";										//MySQL数据库服务器
$userName = "root";										//用户名
$password = "root";										//密码
$dbName = "db_database21";								//数据库名
$connID = mysql_connect($host, $userName, $password);			//连接MySQL数据库
mysql_select_db($dbName, $connID);							//选择MySQL数据库
mysql_query("set names utf8");								//设置字符集
echo "<table border=\"1px\" align=\"center\">
         <tr>
			 <td>学号</td>
			 <td>姓名</td>
			 <td>班级</td>
			 <td>语文</td>
			 <td>数学</td>
			 <td>英语</td>
		 </tr>";
$query = mysql_query("select sno, sname, class, chinese, math ,english from tb_student", $connID);
												//执行查询
while($result = mysql_fetch_array($query))					//获取结果集并输出查询结果
{
    echo  "<tr>
		     <td>".$result["sno"]."</td>
			 <td>".$result["sname"]."</td>
			 <td>".$result["class"]."</td>
			 <td>".$result["chinese"]."</td>
			 <td>".$result["math"]."</td>
			 <td>".$result["english"]."</td>
		 </tr>";    
}
echo "</table>";
?>
