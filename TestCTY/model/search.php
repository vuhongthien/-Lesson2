<?php include "connect.php";

    $key= $_GET[ 'gsearch' ];

   
    $sotin1trang = 10; // khách hàng muốn
    
    if( isset($_GET["trang"]) ){
        $trang = $_GET["trang"];
        settype($trang, "int");
    }else{
        $trang = 1;	
    }
    $from = ($trang -1 ) * $sotin1trang;
    $sql = 'SELECT `category`.*, `product`.*
        FROM `category` 
        LEFT JOIN `product` ON `product`.`ID_category` = `category`.`ID_category` where `ten` like '."'%$key%'".'
        limit '.$from.', '.$sotin1trang.';';
    
    $sql1 = 'SELECT `category`.*, `product`.*
    FROM `category` 
    LEFT JOIN `product` ON `product`.`ID_category` = `category`.`ID_category`;';
    
    $result1 = mysqli_query( $conn, $sql1 );
    $tongsotin = mysqli_num_rows($result1);
    $sotrang = ceil($tongsotin / $sotin1trang);
    $result = mysqli_query( $conn, $sql );
    echo "<script>window.location='../view/view_search.php?gsearch=$key';</script>";
   
    

?>
