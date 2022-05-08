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
<div style="width:895px; height:441px; background:url(./img/bg.jpg); clear:both;">
    <div style="width:450px; height:130px;">
    
    </div>
<?php 
if(isset($_POST['username']) && trim($_POST['username'])!='')
{
    require_once 'conn.php';
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $sql = $mysqli->query("call pro_login1('".$username."', '".$password."')");
    $info = $sql->fetch_array(MYSQLI_ASSOC);           
    if($info != null){
        $_SESSION['loginUsername'] =  $username;
        echo '<script>window.location.href="success.php";</script>';
    }else {
        echo '<div style="width:300px; height:30px; line-height:30px; border:1px solid #E59B04; background-color:#FCF2E0; color:#FF0000;">用户名或密码输入有误</div>';
    }
}
?>
    <div style="width:430px; height:220px; float:right;">
    <form name="form_login" method="post" style="margin: 0px; padding:0px;" action="<?=$_SERVER['PHP_SELF']?>" onsubmit="return chkinput(this)">
        <div style="width: 100%; height:30px; line-height:30px; text-align:left; color:#006600;">
        用户名：
        </div>
        <div style="width: 100%; height:30px; line-height:30px; text-align:left; color:#006600;">
        <input type="text" name="username" style="width:200px; height:18px; line-height:18px;"  class="input"/>
        </div>
        <div style="width: 100%; height:30px; line-height:30px; text-align:left; color:#666666; font-size:12px;">
请在上述文本框中输入用户名
        </div>
        <div style="width: 100%; height:30px; line-height:30px; text-align:left; color:#006600;">
        密码：
        </div>
        <div style="width: 100%; height:30px; line-height:30px; text-align:left; color:#006600;">
        <input type="password" name="password" style="width:200px; height:18px; line-height:18px;"  class="input"/>
        </div>
        <div style="width: 100%; height:30px; line-height:30px; text-align:left; color:#666666; font-size:12px;">
请在上述文本框中输入登录密码
        </div>
        <div style="width:100%; text-align:left; clear:both;">
        <input type="image" src="./img/submit.jpg"/>
        </div>
    </form>
    


    </div>
</div>

<script language="javascript">
    function chkinput(form)
    {
        if(form.username.value==''){
            alert('请输入用户名！');
            form.username.focus();
            return false;
        }
        
        if(form.password.value==''){
            alert('请输入登录密码！');
            form.password.focus();
            return false;
        }

        return true;
    }


</script>

</body>
</html>