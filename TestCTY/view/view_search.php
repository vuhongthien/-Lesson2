<?php  
    include"../model/search.php";
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
                <form action="../model/search.php" method="get">
                <input type="search" id="gsearch" name="gsearch"> 
                
                </form>                 
            </div>
            <div class="insert">
                <span>search equa</span>
                <a href="../view/view_add.php"><i class="fa-solid fa-circle-plus"></i></a>
                
            </div>
        </div>
        <div class="bodykhung">
            <table style="width: 100%; text-align: center;">
                <tr>
                    <th style="width: 30px;" >ID</th>
                    <th style="width: 200px;">Product name</th>
                    <th>Category</th>
                    <th>Images</th>
                    <th>Operations</th>
                </tr>
                <?php
                
                foreach ( $result as $item ) {
                ?>
                <tr>                    
                    <td>
                    <?= $item['ID_product'] ?>
                    </td>
                    <td>
                    <?= $item['ten'] ?>
                    </td>
                    <td>
                    <?= $item['tencategory'] ?>
                    </td>
                    <td>
                        <img style="width: 40px; height: 40px;" src="../images/<?= $item['hinhanh'] ?>"/>
                    </td>
                    <td>
                    <a href="../view/view_edit.php?ID_product=<?= $item['ID_product'] ?>">
                    <i class="fa-solid fa-file-pen"></i></a>
                    <a href="../controller/delete.php?ID_product=<?= $item['ID_product'] ?>">
                    <i class="fa-solid fa-circle-minus"></i></a>
                    <a  href="../view/view_coppy.php?ID_product=<?= $item['ID_product'] ?>">
                    <i class="fa-solid fa-file"></i></a>
                    <a href="../view/view_viewprod.php?ID_product=<?= $item['ID_product'] ?>"><i class="fa-solid fa-eye"></i></a>
                </td>                
            </tr>
            <?php
                    }
		        ?>
            </table>
        </div>
        <div id="phantrang">
            
            <table class="pt" >
                <tr>
                <th style="width: 63px;"><a href="../index.php?trang=1">Previous</a></th>
                    <?php            
                        for($t=1; $t<=$sotrang; $t++){
                            echo "<th style='width: 20px;'><a href='../index.php?trang=$t'>$t</a></th>";
                            $y=$t;
                        }
                    ?>
                    <th style="width: 63px;"><a href='../index.php?trang=<?= $y?>'>Next</a></th>
                </tr>
             </table>;
               
        </div>
        <div class="footkhung">
            <span>
                Trang quản lý sản phẩm.
            </span>
        </div>
    </div>
</body>
</html>