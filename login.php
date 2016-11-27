<body style="text-align: center;background-image: url('static/bg.jpg');background-repeat: no-repeat;background-size:cover"; >
<div style="margin-top:30%;"><font style="color:#FF9001;font-size:30px;font-weight: bold;">
<?php
if(isset($_GET['k']))
{
    $key=$_GET['k'];
    $host='localhost';
    $user='root';
    $db='es';
    $pwd='960514';
    $conn=mysql_connect($host,$user,$pwd) or die("error connecting") ; //连接数据库
    mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
    mysql_select_db($db); //打开数据库
    $sql = "insert into es (uuid) values ('$key')";
    $result=mysql_query($sql);
    mysql_close(); //关闭MySQL连接
    if($result)
    {
        echo "扫码成功！";
    }
    else{
        echo "出现错误，你重试！";
    }
}
else 
{
    echo "出现错误，你重试！";;
}
?>
</font><br/>
</div>
</body>