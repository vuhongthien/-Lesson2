<?php
    $host ="localhost"; // khai báo thông tin localhost
    $username = "root"; 
    $password = "";
    $database = "prd";
    $conn = mysqli_connect($host,$username,$password,$database); // thực thi kết nối
    if (mysqli_connect_errno()){
        echo "Connection Fail: ".mysqli_connect_errno();exit; // nếu lỗi in ra lỗi
    }
?>