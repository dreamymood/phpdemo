
<?php

$servername = "47.110.33.186:3306";
$username = "root";
$password = "Sd2884809_";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功";
   phpinfo();
?>