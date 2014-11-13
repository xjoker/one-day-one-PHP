<?php
/**
 * Created by PhpStorm.
 * User: xJoker
 * Date: 14/11/13
 * Time: 21:25
 */

$mysql_connect=mysql_connect("127.0.0.1:8889","root","root");
//链接MYSQL数据库
if(!$mysql_connect){
    die ('无法连接数据库'.mysql_error());
}

//mysql_query执行数据库语句查询
if(mysql_query("CREATE DATABASE XJOKER"))
{
    echo "数据库创建完毕";

}else{
    echo "数据库已经存在或创建失败";
}

//创建一个含有三列的数据库
//ID 用户名 密码
echo "选择数据库";
mysql_select_db("XJOKER",$mysql_connect); //选择数据库
$create_table="CREATE TABLE User(ID int NOT NULL AUTO_INCREMENT,PRIMARY KEY(ID),username varchar(15),password varchar(15))";
mysql_query($create_table,$mysql_connect);
echo "插入数据";
//向数据库插入数据
$insert_date="INSERT INTO User(username,password) VALUE ('xjoker','123456')";
mysql_query($insert_date);
$insert_date1="INSERT INTO User(username,password) VALUE ('hehe','654321')";
mysql_query($insert_date1);
echo "插入完毕";
echo "取出数据";
//从数据库中取出数据
$get_date="SELECT * FROM User";
//mysql_fetch_array() 从返回的结果中取得行生成数组，读到没有时会返回FALSE
while($row =mysql_fetch_array(mysql_query($get_date))){
    echo $row['ID']." ".$row['username']." ".$row['password'];
    echo "<br/>";
}
echo "取出完毕";
echo "查询数据";
//查询语句 查询username为xjoker的值 输出整行
$where_date="SELECT * FROM User WHERE 'username'='xjoker'";
while($row=mysql_fetch_array(mysql_query($where_date))){
    echo $row['ID']." ".$row['username']." ".$row['password'];
    echo "<br/>";
}
echo "查询完毕";
echo "删除数据";
//删除username为xjoker的数据行
$delete_date="DELETE FROM User WHERE 'username'='xjoker' ";
mysql_query($delete_date);
echo "删除完毕";
echo "关闭连接";
mysql_close($mysql_connect);//关闭mysql连接
echo "关闭完毕";