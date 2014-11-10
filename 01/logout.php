<?php
/**
 * Created by PhpStorm.
 * User: xJoker
 * Date: 14/11/10
 * Time: 20:17
 */
session_start(); //session开启
session_destroy(); //摧毁session
$_SESSION=array(); //将session数组设置为空
header('Location:index.php');
exit();