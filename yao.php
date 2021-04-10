<?php

header('Content-Type: text/html; charset=utf-8');
/**
 * (1)配置数据库信息 
 */
$db_host = "localhost"; //主机名
$db_port = "3306"; //端口号
$db_user = "root1"; //用户名
$bd_pass = "root"; //密码
$db_name = "itcase"; //数据库
$charset = "utf-8"; //字符集
/**
 * (2)PHP链接MySQL服务器
*/
$link = @mysqli_connect($db_host.":".$db_port,$db_user,$bd_pass);

if(mysqli_connect_errno()){
    echo "<h2>php链接数据库失败";
    die();//终止程序向下运行;
}
?>