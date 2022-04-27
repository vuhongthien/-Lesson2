<?php     
    include"../model/category.php";
    include"../model/editproduct.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/09c546e0e8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
</head>
<body>
    <div class="khung">
        <div class="headkhung">
            <div class="buttonhead">                
                    <a class="products" href="../index.php">Products</a>
                    <a class="Categories" href="#">Categories</a>                
                
                <div class="hinh">
                    <img class="logo" style="width: 70px; height: 70px;" src="../images/1.jpg"/>
                </div>                
            </div>
            
            <div class="search">
                <input type="search" id="gsearch" name="gsearch">                
            </div>
            <div class="insert">
                <span>search equa</span>
                <a href="#"><i class="fa-solid fa-circle-plus"></i></a>
            </div>
        </div>
        <div class="bodykhung">
            <div class="title"><h1> Edit product</h1></div>
            
            <form action='' method="post" enctype="multipart/form-data">          
                <label>Category</label>                      
                <select class="ip" id="sl" name="category"  class="category">
                    <?php
                        include"../model/editproduct.php";
                        foreach ( $result as $item ) {                            
                    ?>                    
                    <option value="<?php echo $item['ID_category']; ?>"<?php if($row['ID_category'] == $item['ID_category']) echo 'selected="selected"'; ?>><?php echo $item['tencategory']; ?></option>
                    <?php
                        }
                    ?>
                </select></br>
                <?php
                    
                    foreach ( $result1 as $item1 ) {
                ?>
                <?php
                    }
                ?>
                <label>Product name</label>                
                <input class="ip" type="text" name="ten" value="<?= $item1['ten'] ?>"/> </br>
                <label>Product images</label>
                <input  type="file" name="hinhanh" src="../images/<?= $item1['hinhanh'] ?>"/></br>

                <input class="bt" type="submit" name="submit" value="Submit"/>             
            </form>
        </div>
        <div class="footkhung">
            <span>
                Màn hình danh sách sản phẩm
            </span>
        </div>
    </div>
</body>
<?php
if ( isset( $_POST[ 'submit' ] ) ) {
  if ( isset( $_GET[ 'ID_product' ] ) ) {
    $ID_product = $_GET[ 'ID_product' ];
  }

  if ( isset( $_POST[ "category" ] ) ) {
    $category = $_POST[ 'category' ];
  }
	if ( isset( $_POST[ "ten" ] ) ) {
    $ten = $_POST[ 'ten' ];
  }
  
  
        
	  $hinhanh = $_FILES['hinhanh']['name'];
	  $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
 
  
  if ( !$ten ) {

    echo "<script>alert('Vui lòng nhập đầy đủ Thông tin. ');window.location='view_edit.php?ID_product= $ID_product';</script>";
    exit;
  }
if ($hinhanh!=''){
	move_uploaded_file($hinhanh_tmp,'../images/'.$hinhanh);
  $sql = "UPDATE `product` SET ID_product='" . $ID_product . "',
  ten='" . $ten . "',
  ID_category='" . $category . "', 
  hinhanh='" . $hinhanh . "'
  WHERE ID_product='$_GET[ID_product]' ";

}
   
  else{
    $sql = "UPDATE `product` SET ID_product='" . $ID_product . "',
    ten='" . $ten . "',
    ID_category='" . $category . "'   
    WHERE ID_product='$_GET[ID_product]' ";
}
  $kq = mysqli_query( $conn, $sql );

  if ( !$kq ) {
    echo "<script>alert('Có lỗi ! Nhập lại!');</script>";
  } else {
    echo "<script>alert(' $ten đã được sửa. ');window.location='../index.php';</script>";
    die();
  }

}
?>
</html>