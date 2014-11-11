<?php
    setcookie("name","xJoker"); //单独的cookie
    setcookie("title[one]",'title-one'); //数组cookie
    setcookie("title[two]","title-two");
    setcookie("title[three]","title-three");
    setcookie("overtime","time()+3600",time()+3600); //一小时超时的cookie 3600秒
    //如果要删除cookie直接设置为过去的时间就可以 也就是负数时间
    //不过好像unset好用的感觉QAQ
    setcookie("domain","domain",time()+3600,"/php","www.xjoker.us",true,false);
    /*
     * setcookie的参数有几个
     * setcookie(名称,值,存活时间,服务器路径,服务器域名,是否加密传输cookie，是否仅通过HTTP传输)
     */
?>
<!doctype html>
<html lang="zh-hans">
<head>
    <meta charset="UTF-8">
    <title>Set cookie and Get cookie</title>
</head>
<body>
    <table border="1">
        <tr>

            <td><?php print_r($_COOKIE["name"]); ?></td>
        </tr>
        <?php
            if(isset($_COOKIE['title']))
            {

                foreach($_COOKIE['title'] as $name=>$value)  //循环遍历数组  $name为键 $value为值  =>符号是数组成员访问符
                {
                    $name=htmlspecialchars($name);  //htmlspecialchars 把一些预定字符转为HTML实体
                    $value=htmlspecialchars($value);
                    echo "<tr>";
                    echo "<td>".$name."</td>";
                    echo "<td>".$value."</td>";
                    echo "</tr>";
                }

            }
        ?>
        <tr><td >删除cookie</td></tr>

</table>
    <?php print_r($_COOKIE['name']); ?>
    <?php unset($_COOKIE['name']); //删除某个cookie的方法好像用unset安全点 刷新后就会删除?>
    <?php print_r($_COOKIE['name']); ?>
</body>
</html>