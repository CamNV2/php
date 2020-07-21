<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<?php
	
	$sql="select * from product join product_detail on product.id_product=product_detail.id_product ";
	$sanpham=mysqli_query($conn,$sql);
?>

<body>

    <div class="container">
        <div class="col-sm-12">
            <h3 style="border-bottom : solid 2px red ;">FLASH SHALE</h3>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="admincp/modules/sanpham/uploads/sach2.jpg" alt="Lights" style="width:76%">
                            <p style="font-weight : bold;">Tâm Lý Học Hài Hước</p>
                            <center>
                                <h5 class="price">50.000vnd</h5>
                                <h6 style="font-weight : bold;">
                                    <strike>110.000vnd</strike>
                                </h6>

                                <button type="button" class="btn" >Chi tiết</button>
                                <button type="button" class="btn btn-warning">Buy</button>
                            </center>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="admincp/modules/sanpham/uploads/sach3.jpg" alt="Lights" style="width:70%">
                            <p style="font-weight : bold;">Những Đòn Tâm Lý Trong Thuyết Phục (Tái Bản 2019)</p>
                            <center>
                                <h5 class="price">145.000vnd</h5>
                                <h6 style="font-weight : bold;">
                                    <strike>190.000vnd</strike>
                                </h6>

                                <button type="button" class="btn">Chi tiết</button>
                                <button type="button" class="btn btn-warning">Buy</button>
                            </center>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="admincp/modules/sanpham/uploads/sach4.jpg" alt="Lights" style="width:70%">
                            <p style="font-weight : bold;">Your Best Year Ever - Kế Hoạch 5 Bước</p>
                            <center>
                                <h5 class="price">45.000vnd</h5>
                                <h6 style="font-weight : bold;">
                                    <strike>90.000vnd</strike>
                                </h6>

                                <button type="button" class="btn">Chi tiết</button>
                                <button type="button" class="btn btn-warning">Buy</button>
                            </center>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="admincp/modules/sanpham/uploads/sach.jpg" alt="Lights" style="width:70%">
                            <p style="font-weight : bold;">NHỮNG ĐÒN TÂM LÝ TRONG BÁN HÀNG (TÁI BẢN 2018)</p>
                            <center>
                                <h5 class="price">45.000vnd</h5>
                                <h6 style="font-weight : bold;">
                                    <strike>90.000vnd</strike>
                                </h6>

                                <button type="button" class="btn">Chi tiết</button>
                                <button type="button" class="btn btn-warning">Buy</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br></br>
    <div class="container">
        <div class="col-sm-12">
            <h3 style="border-bottom : solid 2px #DF7401 ;">NỔI BẬT</h3>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="admincp/modules/sanpham/uploads/sach2.jpg" alt="Lights" style="width:76%">
                            <p style="font-weight : bold;">Tâm Lý Học Hài Hước</p>
                            <center>
                                <h5 class="price">50.000vnd</h5>
                                <h6 style="font-weight : bold;">
                                    <strike>110.000vnd</strike>
                                </h6>

                                <button type="button" class="btn">Chi tiết</button>
                                <button type="button" class="btn btn-warning">Buy</button>
                            </center>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="admincp/modules/sanpham/uploads/sach3.jpg" alt="Lights" style="width:70%">
                            <p style="font-weight : bold;">Những Đòn Tâm Lý Trong Thuyết Phục (Tái Bản 2019)</p>
                            <center>
                                <h5 class="price">145.000vnd</h5>
                                <h6 style="font-weight : bold;">
                                    <strike>190.000vnd</strike>
                                </h6>

                                <button type="button" class="btn">Chi tiết</button>
                                <button type="button" class="btn btn-warning">Buy</button>
                            </center>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="admincp/modules/sanpham/uploads/sach4.jpg" alt="Lights" style="width:70%">
                            <p style="font-weight : bold;">Your Best Year Ever - Kế Hoạch 5 Bước</p>
                            <center>
                                <h5 class="price">45.000vnd</h5>
                                <h6 style="font-weight : bold;">
                                    <strike>90.000vnd</strike>
                                </h6>

                                <button type="button" class="btn">Chi tiết</button>
                                <button type="button" class="btn btn-warning">Buy</button>
                            </center>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="admincp/modules/sanpham/uploads/sach.jpg" alt="Lights" style="width:70%">
                            <p style="font-weight : bold;">NHỮNG ĐÒN TÂM LÝ TRONG BÁN HÀNG (TÁI BẢN 2018)</p>
                            <center>
                                <h5 class="price">45.000vnd</h5>
                                <h6 style="font-weight : bold;">
                                    <strike>90.000vnd</strike>
                                </h6>
                                <button type="button" class="btn">Chi tiết</button>
                                <button type="button" class="btn btn-warning">Buy</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br></br>
    <div class="container">
            <center>
            <div class="col-sm-12">
                <h3 style="border-bottom : solid 2px #BDBDBD ;">TÁC GIẢ - TÁC PHẨM TIÊU BIỂU</h3>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <img src="admincp/modules/sanpham/uploads/sach2.jpg" alt="Lights" style="width:76%">
                                <p style="font-weight : bold;">Tâm Lý Học Hài Hước</p>
                                <center>
                                    <h5 class="price">50.000vnd</h5>
                                    <h6 style="font-weight : bold;">
                                        <strike>110.000vnd</strike>
                                    </h6>

                                    <button type="button" class="btn">Chi tiết</button>
                                    <button type="button" class="btn btn-warning">Buy</button>
                                </center>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="thumbnail">
                                <img src="admincp/modules/sanpham/uploads/sach3.jpg" alt="Lights" style="width:70%">
                                <p style="font-weight : bold;">Những Đòn Tâm Lý Trong Thuyết Phục (Tái Bản 2019)</p>
                                <center>
                                    <h5 class="price">145.000vnd</h5>
                                    <h6 style="font-weight : bold;">
                                        <strike>190.000vnd</strike>
                                    </h6>

                                    <button type="button" class="btn">Chi tiết</button>
                                    <button type="button" class="btn btn-warning">Buy</button>
                                </center>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="thumbnail">
                                <img src="admincp/modules/sanpham/uploads/sach4.jpg" alt="Lights" style="width:70%">
                                <p style="font-weight : bold;">Your Best Year Ever - Kế Hoạch 5 Bước</p>
                                <center>
                                    <h5 class="price">45.000vnd</h5>
                                    <h6 style="font-weight : bold;">
                                        <strike>90.000vnd</strike>
                                    </h6>

                                    <button type="button" class="btn">Chi tiết</button>
                                    <button type="button" class="btn btn-warning">Buy</button>
                                </center>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="thumbnail">
                                <img src="admincp/modules/sanpham/uploads/sach.jpg" alt="Lights" style="width:70%">
                                <p style="font-weight : bold;">NHỮNG ĐÒN TÂM LÝ TRONG BÁN HÀNG (TÁI BẢN 2018)</p>
                                <center>
                                    <h5 class="price">45.000vnd</h5>
                                    <h6 style="font-weight : bold;">
                                        <strike>90.000vnd</strike>
                                    </h6>

                                    <button type="button" class="btn">Chi tiết</button>
                                    <button type="button" class="btn btn-warning">Buy</button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <img src="admincp/modules/sanpham/uploads/sach.jpg" alt="Lights" style="width:70%">
                                <p style="font-weight : bold;">NHỮNG ĐÒN TÂM LÝ TRONG BÁN HÀNG (TÁI BẢN 2018)</p>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <img src="admincp/modules/sanpham/uploads/sach.jpg" alt="Lights" style="width:70%">
                                <p style="font-weight : bold;">NHỮNG ĐÒN TÂM LÝ TRONG BÁN HÀNG (TÁI BẢN 2018)</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <img src="admincp/modules/sanpham/uploads/sach.jpg" alt="Lights" style="width:70%">
                                <p style="font-weight : bold;">NHỮNG ĐÒN TÂM LÝ TRONG BÁN HÀNG (TÁI BẢN 2018)</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
    <br></br>
    <div class="container">
        <center>
        <div class="col-sm-12">
            <h3 style="border-bottom : solid 2px #DF7401 ;">Kinh Tế</h3>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                <?php while($row=mysqli_fetch_array($sanpham))
                {
                ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                        <?php
					echo '<img src="image/'.$row['image'].'" width="70%" />';
					?>
                            
                            
                            <center>
                            <p style="font-weight : bold;"><?php echo $row['title'] ?></p>
                                <h5 class="price"><?php echo $row['price'] ?>vnd</h5>
                                <h6 style="font-weight : bold;">
                                    <strike><?php echo $row['discout'] ?>vnd</strike>
                                </h6>
                                <a href="index.php?xem=chitiet&id=<?php echo $row['id_product'] ?>"> <button type="button" class="btn"> Chi tiết</button></a>
                                <button type="button" class="btn btn-warning">Buy</button>
                            </center>
                        </div>
                    </div>
                <?php
                 }
			     ?>
                </div>
            </div>
        </div>
    </div>
   
    <div class="clear"></div>

    </ul>
</body>

</html>