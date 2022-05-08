<?php
include ("conn/conn.php"); //连接数据库
$query = "select * from tb_book where id=" . $_GET[recid]; //定义查询指定数据的语句
$result = mysql_query($query); //执行查询
if (! $result)
    die("error: mysql query"); //返回失败的结果
$num = mysql_num_rows($result); //获取查询结果的数量
if ($num < 1)
    die("error: no this recorder"); //如果查询结果小于则说明没有数据
$data = mysql_result($result, 0, "cover"); //获取查询结果
mysql_close($conn); //关闭数据库
echo $data; //输出返回的数据
?> 



