<?php include "connect.php";
$sql = 'SELECT *
FROM `category`
';
$result = mysqli_query( $conn, $sql );
?>