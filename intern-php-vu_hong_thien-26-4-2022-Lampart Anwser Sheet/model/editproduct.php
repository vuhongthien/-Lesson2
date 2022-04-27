<?php include "connect.php"; // truyền vào file kết nối
if ( isset( $_GET[ 'ID_product' ] ) ) { 
    $ID_product = $_GET[ 'ID_product' ]; // lấy dữ liệu trên thanh đia chỉ

$sql = 'SELECT *
        FROM `category` 
	    LEFT JOIN `product` 
        ON `product`.`ID_category` = `category`.`ID_category`
        WHERE `ID_product`= "'.$ID_product.'";'; // lấy tất cả sản phẩm có mã sản phẩm bằng mã sản phẩm truyền trên url
$result1 = mysqli_query( $conn, $sql ); // thực thi truy vấn
$row = mysqli_fetch_array( $result1 );// thực thi kiểu mảng
}
?>