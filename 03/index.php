<!doctype html>
<html lang="zh-hans">
<head>
    <meta charset="UTF-8">
    <title>Include</title>
</head>
<body>
<p>Include 导入实验</p>
<div name="header">
    <?php include 'header.php'; ?>
</div>
<br/>
<div name="body">
    <?php include 'body.php'; ?>
</div>
<br/>
<div name="footer">
    <?php include 'footer.php'; ?>
</div>
<br/>
<p>文件读取实验</p>
<?php
    $file= readfile("a.txt"); //打开文件 并且存入变量中
    echo $file;
    echo "<br/>";//关闭文件
    $file2= readfile("a.txt");
    echo fgets($file2);
    fclose($file);
    fclose($file2);
?>
<br/>
<p>创建文件</p>
<?php
    $myfile=fopen("b.txt",w) or die ("无法创建文件"); //创建文件
    $txt="heihei";
    fwrite($myfile,$txt);//写入信息
    fclose($myfile);
    echo readfile("b.txt");
    echo "<br/>";
    $myfile=fopen("b.txt",w) or die ("无法创建文件"); //第二次的操作会复写第一次的
    $txt="yoooooooooooooooooooo";
    fwrite($myfile,$txt);
    fclose($myfile);
    echo readfile("b.txt");

?>
<br/>
<a href="upload.php">上载文件测试</a>
</body>
</html>