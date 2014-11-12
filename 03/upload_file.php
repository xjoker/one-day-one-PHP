<?php
if ($_FILES["file"]["error"] > 0)
{
    echo "Error: " . $_FILES["file"]["error"] . "<br />"; //异常代码
}
else
{
    echo "Upload: " . $_FILES["file"]["name"] . "<br />"; //被上传的文件名
    echo "Type: " . $_FILES["file"]["type"] . "<br />"; //文件类型
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";   //文件大小
    echo "Stored in: " . $_FILES["file"]["tmp_name"]; //文件存储在服务器上的临时名称
    if(file_exists("upload/".$_FILES["file"]["name"])){
        echo $_FILES["file"]["name"]."已经存在";
    }else{
        move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
        //move_uploaded_file(要移动的文件名,要移动到的位置)
        echo $_FILES["file"]["name"]."存储完毕";
    }
}
?>