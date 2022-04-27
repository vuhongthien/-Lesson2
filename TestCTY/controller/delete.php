<?php
include "../model/connect.php";
if ( isset( $_GET[ 'ID_product' ] ) ) {
  $ID_product= $_GET[ 'ID_product' ];
	
	
  $sql = "DELETE FROM product WHERE ID_product='$ID_product'";
  if ( $conn->query( $sql ) === TRUE ) {
    echo "<script>window.location='../index.php';</script>";
	 
               
    die();
  } else {
    echo "Lỗi " . $conn->error;
  }
  $conn->close();
}
?>