<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>使用存储过程实现用户登录</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<br />
    <div style="width:300px; height:35px; line-height:35px; border:1px solid #E59B04; background-color:#FCF2E0; color:#0000FF;">
        恭喜您<?= $_SESSION['loginUsername']?>，您已经成功登录本站！
    </div>
</body>
</html>


