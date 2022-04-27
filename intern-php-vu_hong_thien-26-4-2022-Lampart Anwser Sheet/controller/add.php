<?php


include "../model/connect.php"; // truyền file kết nối

if ( isset( $_POST[ 'submit' ] ) ) { // nếu nút submit dc nhấn
// gán các dữ liệu vào từng biến
  if ( isset( $_POST[ "category" ] ) ) { 
    $category = $_POST[ 'category' ];
  }
  if ( isset( $_POST[ "ten" ] ) ) {
    $ten = $_POST[ 'ten' ];
  }
  if ( isset( $_POST[ "hinhanh" ] ) ) {
    $hinhanh = $_POST[ 'hinhanh' ];
  }  
  
	if ( !$category || !$ten|| !$hinhanh) { // kiểm tra thông tin có bị thiếu hay k

    echo "<script>alert('Vui lòng nhập đầy đủ Thông tin. ');window.location='../view/view_add.php';</script>";
    exit;
  }
	
  $sql = "insert into product (ten,ID_category,hinhanh)
	values('$ten','$category','$hinhanh')"; // tuy vấn chèn dữ liệu
  $kq = mysqli_query( $conn, $sql ); // thực thi
	

  if ( !$kq ) { // kiểm tra nếu ko tồn tại dữ liệ đã thực thi thì lỗi
    echo "<script>alert('Có lỗi ! Nhập lại!');</script>";
  } else {

    echo "<script>alert(' Sản phẩm $ten đã được thêm. Cám ơn  ');window.location='../index.php';</script>";
    die();
  }


}
?>
