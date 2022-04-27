<?php include "connect.php";
if ( isset( $_GET[ 'ID_product' ] ) ) {
    $ID_product = $_GET[ 'ID_product' ];

$sql = 'SELECT *
        FROM `category` 
	    LEFT JOIN `product` 
        ON `product`.`ID_category` = `category`.`ID_category`
        WHERE `ID_product`= "'.$ID_product.'";';
$result1 = mysqli_query( $conn, $sql );
$row = mysqli_fetch_array( $result1 );
}
?>