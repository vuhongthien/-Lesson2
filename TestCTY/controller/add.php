<?php


include "../model/connect.php";

if ( isset( $_POST[ 'submit' ] ) ) {

  if ( isset( $_POST[ "category" ] ) ) {
    $category = $_POST[ 'category' ];
  }
  if ( isset( $_POST[ "ten" ] ) ) {
    $ten = $_POST[ 'ten' ];
  }
  if ( isset( $_POST[ "hinhanh" ] ) ) {
    $hinhanh = $_POST[ 'hinhanh' ];
  }  
  
	if ( !$category || !$ten|| !$hinhanh) {

    echo "<script>alert('Vui lòng nhập đầy đủ Thông tin. ');window.location='../view/view_add.php';</script>";
    exit;
  }
	
  $sql = "insert into product (ten,ID_category,hinhanh)
	values('$ten','$category','$hinhanh')";
  $kq = mysqli_query( $conn, $sql );
	

  if ( !$kq ) {
    echo "<script>alert('Có lỗi ! Nhập lại!');</script>";
  } else {

    echo "<script>alert(' Sản phẩm $ten đã được thêm. Cám ơn  ');window.location='../index.php';</script>";
    die();
  }


}
?>
