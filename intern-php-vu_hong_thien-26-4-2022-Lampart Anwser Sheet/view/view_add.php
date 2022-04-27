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
            <h1> Add new product</h1>
            <form action='../controller/add.php' method="post" >          
                <label>Category</label>                      
                <select class="ip" id="sl"  name="category"  class="category">
                    <?php
                        include"../model/editproduct.php"; // truyền vào file editproduct
                        foreach ( $result as $item ) {         // tạo lòng lặp dê đổ dữ liệu                    
                    ?>                    
                    <option value="<?php echo $item['ID_category']; ?>"><?php echo $item['tencategory']; ?></option>
                    <?php
                        }
                    ?>
                </select></br>                
                <label>Product name</label>                
                <input   class="ip" type="text" name="ten" /> </br>
                <label>Product images</label>
                <input  type="file" name="hinhanh" /></br>

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
</html>