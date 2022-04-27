<?php include "connect.php";

    $key= $_GET[ 'gsearch' ];

   
    $sotin1trang = 10; // khách hàng muốn
    
    if( isset($_GET["trang"]) ){ // lấy dữ liệu tên "trang" trên thanh url
        $trang = $_GET["trang"];
        settype($trang, "int");
    }else{
        $trang = 1;	
    }
    $from = ($trang -1 ) * $sotin1trang; // tính số thứ tự của sản phẩm đầu tiên với cuối cùng của 1 trang
    $sql = 'SELECT `category`.*, `product`.*
        FROM `category` 
        LEFT JOIN `product` ON `product`.`ID_category` = `category`.`ID_category` where `ten` like '."'%$key%'".'
        limit '.$from.', '.$sotin1trang.';'; // truy xuất dữ liệu "ten" có ký tự giống ký tự truyền vào tối đa 1 trang
    
    $sql1 = 'SELECT `category`.*, `product`.*
    FROM `category` 
    LEFT JOIN `product` ON `product`.`ID_category` = `category`.`ID_category` where `ten` like '."'%$key%'".';'; // truy xuất tất cả dữ liệu "ten" có ký tự giống ký tự truyền
    
    $result1 = mysqli_query( $conn, $sql1 ); // thực thi truy xuất dữ liệu "ten" có ký tự giống ký tự truyền vào tối đa 1 trang
    $tongsotin = mysqli_num_rows($result1); // đếm số dữ liệu của biến result1
    $sotrang = ceil($tongsotin / $sotin1trang); // chia số trang làm tròn 
    $result = mysqli_query( $conn, $sql ); // thực thi truy xuất tất cả dữ liệu "ten" có ký tự giống ký tự truyền
    echo "<script>window.location='../view/view_search.php?gsearch=$key';</script>"; // chuyển tới trang hiển thị dữ liệu
   
    

?>
