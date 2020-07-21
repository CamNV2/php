

	<h1 align="center">Giỏ hàng của bạn</h1>
    <p align="right" style="color:#063;font-size:18px;text-decoration:underline;" >Xin chào: <?php
	
			if(isset($_SESSION['dangnhap'])){
			echo $_SESSION['dangnhap'];
		}
		
	?></p>
    <?php
	if(isset($_SESSION['dangnhap'])){
   	echo '<form action="logout.php" method="post">';
    	echo '<button class="button1" name ="logout" style="margin-right:60px;" >Đăng Xuất</button>';
    echo '</form>';
	
	}
 ?>
    <?php
		
	
		$current_url=base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		if(isset($_SESSION['products'])){
			$total=0;
			
				?>
               <div class="container">
    <table id="cart" class="table table-hover table-condensed">
      <thead>
        <tr>
          <th style="width:50%">Tên sản phẩm</th>
          <th style="width:10%">Giá</th>
          <th style="width:8%">Số lượng</th>
          <th style="width:22%" class="text-center">Thành tiền</th>
          <th style="width:10%"> </th>
        </tr>
	  </thead>
	  <?php foreach($_SESSION['products'] as $cart_itm){?>
      <tbody>
        <tr>
          <td data-th="Product">
            <div class="row">
              <div class="col-sm-2 hidden-xs">
			  <?php echo '<img src="image/'.$cart_itm['image'].'" width="50" height="50" class="img-responsive" width="100"/>';?> 
                  
              </div>
              <div class="col-sm-10">
                <h4 class="nomargin" > <?php echo $cart_itm['name'] ?> </h4>
                <p></p>
              </div>
            </div>
          </td>
          <td data-th="Price"><?php echo $cart_itm['price'] ?></td>
          <td data-th="Quantity"><?php echo $cart_itm['qty']?>
		  </td>
		  <?php 	$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        		$total = ($total + $subtotal);?>
          <td data-th="Subtotal" class="text-center"><?php echo $subtotal ?></td>
          <td class="actions" data-th="">
            <button class="btn btn-info btn-sm"><i class="glyphicon glyphicon-check"></i>
            </button>
           <a href="cart_update.php?removep=<?php echo  $cart_itm['id'].'&return_url='.$current_url ?>"> <button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i>
			</button>
			</a>
          </td>
		</tr>
	  </tbody>
	 
			<?php } ?>
      <tfoot>

        <tr>
		<td>
          </td>
          <td colspan="2" class="hidden-xs"> </td>
          <td class="hidden-xs text-center"><strong>Tổng tiền <?php echo $total.'$' ?></strong>
          </td>
          <td>
			  <?php if(!isset($_SESSION['dangnhap'])){
				  echo'<a href="?xem=login" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>';
				}
				    else{
						echo '<form action="thanhtoan.php" method="post">';
						echo '<button type="button" class="btn btn-warning" name ="mua hang">Mua hàng</button>';
						echo '</form>';
					}
				 
				 ?>
			  
          </td>
        </tr>
      </tfoot>
    </table>
 
			<?php } ?>
			<td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
          </td>
 </div>


