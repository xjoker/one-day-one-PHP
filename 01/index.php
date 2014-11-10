<?php
    //简单的登录验证系统
    // 2014-11-10 20:40
    session_start();
    $user='xjoker';
    $password='123456';
    if(isset($_POST['username'])&&isset($_POST['password']))
    {
        if($user==$_POST['username']&&$password==$_POST['password'])
        {
            $_SESSION['isLogin']=true;
            $_SESSION['loginError']='';
        }else{
            $_SESSION['loginError']=true;
        }
    }

?>

<!DOCTYPE html>
<html lang="zh-hans">
<head>
    <meta charset="UTF-8">
    <title>01</title>
</head>
<body>
    <p>用户名 xjoker  密码 123456</p>
    <?php if($_SESSION['loginError']==true){ ?>
    <p><storng>登录验证错误</storng></p>
    <?php } ?>
    <?php if($_SESSION['isLogin']==true){ ?>
    <label>已经登录，<a href="logout.php">点击退出</a></label>
    <?php } ?>
    <?php if(!isset($_SESSION['isLogin'])){ ?>
    <form action="<?php $_SERVER['SCRIPT_NAME']; ?>" method="post">
        <input type="text" placeholder="User" name="username"/>
        <input type="password" placeholder="Password" name="password"/>
        <button type="submit">Login</button>
    </form>
    <?php } ?>

</body>
</html>