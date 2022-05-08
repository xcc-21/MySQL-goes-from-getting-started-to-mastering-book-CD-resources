<?php
include ("conn/conn.php"); //连接数据库
$bookname = $_POST["bookname"]; //获取表单中提交的数据
$price = $_POST["price"];
$maker = $_POST["maker"];
$issuDate = $_POST["issuDate"];
$publisher = $_POST["publisher"];
$synopsis = $_POST["synopsis"];
$cover = $_POST["cover"]; //获取表单中提交的图片
if ($_POST["Submit"] == true) {
    $cover_type = strstr($cover, "."); //获取从"."到最后的字符	
    if ($cover_type != ".jpg" && $cover_type != ".gif" && $cover_type !=
     ".JPG" && $cover_type != ".GIF" && $cover_type != ".bmp" && $cover_type !=
     ".BMP") { //判断图片的格式
        echo "<script>alert('封面图片格式不对，请进行处理后在上传！'); window.location.href='index.php';</script>";
    } else {
        $cover=iconv("utf-8","gb2312",$cover);            //设置字符串的编码格式
        $fp = fopen($cover, "rb"); //以二进制形式打开图片
        $image = addslashes(
        fread($fp, filesize($cover))); //读取二进制的数据
        $sql = "insert into tb_book(bookname,price,maker,issuDate,publisher,synopsis,cover)values('$bookname','$price','$maker','$issuDate','$publisher','$synopsis','$image')"; //将数据添加到指定的数据表中
        $result = mysql_query($sql, 
        $conn);
        if ($result == true) {
            echo "文件上传成功!!";
            echo "<meta http-equiv=\"refresh\" content=\"30 url=index.php\">";
        } else {
            echo "上传失败!!";
            echo "<meta http-equiv=\"refresh\" content=\"30 url=index.php\">";
        }
    }
}
?>