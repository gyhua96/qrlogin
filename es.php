<?php
header("Content-Type: text/event-stream");
$key=$_GET['k'];
$host='localhost';
$user='root';
$db='es';
$pwd='960514';
$conn=mysql_connect($host,$user,$pwd) or die("error connecting") ; //连接数据库
mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
mysql_select_db($db); //打开数据库
$sql="select * from `es` where  `uuid` ='$key'"; //SQL语句
$result = mysql_query($sql); //查询
$row = mysql_fetch_array($result);
if(mysql_num_rows($result)){
    echo "data: ".$row['id']."\nevent: login\n\n";
    echo "data: ".$row['id']."\nevent: user\n\n";
}
?>
