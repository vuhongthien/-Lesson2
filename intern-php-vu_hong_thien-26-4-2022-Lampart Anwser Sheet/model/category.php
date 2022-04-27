<?php include "connect.php";
$sql = 'SELECT *
FROM `category`
'; // lấy tất cả danh mục
$result = mysqli_query( $conn, $sql ); // thực thi
?>