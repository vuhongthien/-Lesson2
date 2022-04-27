<?php
include "../model/connect.php";
if ( isset( $_GET[ 'ID_product' ] ) ) { // lấy mã sản phẩm thông qua url
  $ID_product= $_GET[ 'ID_product' ];
	
	
  $sql = "DELETE FROM product WHERE ID_product='$ID_product'"; // truy vấn xoá dữ liệu
  if ( $conn->query( $sql ) === TRUE ) { // nếu được thực thi thì chuyển trang
    echo "<script>window.location='../index.php';</script>";
	 
               
    die();
  } else {
    echo "Lỗi " . $conn->error;
  }
  $conn->close(); // đóng kết nối
}
?>