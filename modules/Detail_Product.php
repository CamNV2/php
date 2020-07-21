<?php

	$sql="select * from product join product_detail on product.id_product=product_detail.id_product where product.id_product='$_GET[id]'";
    $chitiet = mysqli_query($conn, $sql);
	$row_chitiet=mysqli_fetch_array($chitiet); 
	
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>

</style>

<body>	
<div class="container">
        <div class="col-md-12">
            <h3 style="border-bottom : solid 2px #DF7401 ;">Chi Tiết Sản Phẩm</h3>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                    <?php
                     echo 
                     '<form action="cart_update.php" method="post" enctype="multipart/form-data">';

                    ?> 
                        <?php $current_url=base64_encode($url='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		                 $id=$_GET['id'];
                          echo '<img src="image/'.$row_chitiet['image'].'"/>';
                          echo '<input type="hidden" name="id_product" value="'.$id.'"/>';
                          echo '<input type="hidden" name="type" value="add"/>';
                          echo '<input type="hidden" name="return_url" value="'.$current_url.'"/>';
                          ?>
                    </div>
                    <div class="col-md-6" style="margin-top: 20px">
                      <h3>Tên sách : <strong> <?php echo $row_chitiet['title'] ?> </strong></h4>
                      <h4>Giá : <strike><strong><?php echo $row_chitiet['price'] ?> đ</strong></strike></h4>
                      <h4 >Giảm Giá: <strong class="price"><?php echo $row_chitiet['discout']  ?> đ </strong></h4>
                      <h4 style=" font-weight:bold; "> Mô tả : <?php echo $row_chitiet['into'] ?>...</h4>
                      <h4 style="border-bottom : solid 2px #848484;">Tình trạng: <i style="color: red">còn hàng </i> </h4>
                      <?php echo' <p>Số lượng <input type="text" name="qty" value="1" size="3" /></p>'; ?>
                      <?php
                      
                       echo ' <button type="submit" class="btn btn-warning" name="add" value="Đặt Hàng" style="margin-top:20px;float:right">Đặt Hàng</button>';
                       echo '</form>';
                       ?>
                    </div>
                    
                </div>
            </div>
        </div>
        <a href="index.php" ><button type="submit" class="btn" style="margin-top:20px;float:right">Quay Lại</button></a>
</div>   

<br></br>
 <?php
	if(isset($_SESSION['product'])){
		$count=count($_SESSION['product']);
		echo $count;
	}
    ?>
    

</body>
</html>