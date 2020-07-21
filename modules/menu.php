<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel = "stylesheet" href ="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style type="text/css" >
.sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
a.active{
  background-color : #ffaa56 !important;
}
.price{
  background-color:LightSalmon;
  border: none;
  color: white;
  padding: 6px 15px;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.navbar{
    border-radius : 0px;
    margin-bottom : 0px ;
    background-color : white !important ;
    border-top : solid 2px Yellow !important;
    border-bottom : solid 2px Yellow !important;
    height : 80px  !important;

}
ul li {
    text-transform : uppercase ;
    font-weight : bold ;
    
}
ul li a {
    color : black !important;
}

 {
        margin: 0;
        padding: 0;
        font-family: 'josefin San', sans-serif;
    }


    .button1 {
        background-color: #00FFFF;
        border: 2px solid white;
        border-radius: 30px;
        text-decoration: none;
        padding: 10px 28px;
        color: rgb(48, 5, 5);
        margin-top: 10px;
        display: inline-block;
        float: right;
    }

    .button {
        background-color: #00FFFF;
        border: 2px solid white;
        border-radius: 30px;
        text-decoration: none;
        padding: 10px 28px;
        color: rgb(48, 5, 5);
        margin-top: 10px;
        display: inline-block;

    }
    .button3 {
        background-color: #00FFFF;
        border: 2px solid white;
        border-radius: 30px;
        text-decoration: none;
        padding: 10px 28px;
        color: rgb(48, 5, 5);
        margin-top: 10px;
        display: inline-block;

    }



    .login {
        position: relative;
        z-index: 50;

    }

    .bg-modal {
        margin-top: 200px;
        margin-right: 400px;
        background-color: rgba(0, 0, 0, 0.8);
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 500;
        top: 0;
        display: none;
        justify-content: center;
        align-items: center;

    }

    .modal-contents {
        background-color: red;
        height: 500px;
        width: 300px;
        background: url(./image/bg.png);
        
        padding: 20px;
        position: relative;
        text-align: center;
        border-radius: 4px;
    }

    input {
        margin: 15px auto;
        display: block;
        width: 50%;
        padding: 8px;
        border: 1px solid gray;
    }

    .close {
        position: absolute;
        top: 4px;
        right: 10px;
        font-size: 80px;
        color: white;
        transform: rotate(45deg);
        cursor: pointer;

    }

    body {
    margin: 0;
    padding: 0;
    
  }

  .signup-form {
    width: 300px;
    padding: 20px;
    text-align: center;
    
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    overflow: hidden;
  }

  .signup-form h1 {
    margin-top: 100px;
    font-family: 'Permanent Marker', cursive;
    color: #fff;
    font-size: 40px;
  }

  .signup-form input {
    display: block;
    width: 100%;
    padding: 0 16px;
    height: 44px;
    text-align: center;
    box-sizing: border-box;
    outline: none;
    border: none;
    font-family: "montserrat", sans-serif;
  }

  .txtb {
    margin: 20px 0;
    background: rgba(255, 255, 255, .5);
    border-radius: 6px;
  }

  .signup-btn {
    margin-top: 60px;
    margin-bottom: 20px;
    background: #487eb0;
    color: #fff;
    border-radius: 44px;
    cursor: pointer;
    transition: 0.8s;
  }

  .signup-btn:hover {
    transform: scale(0.96);
  }

  .signup-form a {
    text-decoration: none;
    color: #fff;
    font-family: "montserrat", sans-serif;
    font-size: 14px;
    padding: 10px;
    transition: 0.8s;
    display: block;
  }

  .signup-form a:hover {
    background: rgba(0, 0, 0, .3);
  }
  body {
        margin: 0;
        padding: 0;
       
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
    }

    .login-box {
        width: 320px;
        height: 420px;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%, -50%);
        box-sizing: border-box;
        padding: 70px 30px;
    }

    .avatar {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: -50px;
        left: calc(50% - 50px);
    }

    h1 {
        margin: 0;
        padding: 0 0 20px;
        text-align: center;
        font-size: 22px;
    }

    .login-box p {
        margin: 0;
        padding: 0;
        font-weight: bold;
    }

    .login-box input {
        width: 100%;
        margin-bottom: 20px;
    }

    .login-box input[type="text"],
    input[type="password"] {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
    }

    .login-box input[type="submit"] {
        border: none;
        outline: none;
        height: 40px;
        background: #FE9A2E;
        color: #fff;
        font-size: 18px;
        border-radius: 20px;
    }

    .login-box input[type="submit"]:hover {
        cursor: pointer;
        background: #F5A9F2;
        color: #000;
    }

    .login-box a {
        text-decoration: none;
        font-size: 14px;
        color: #fff;
    }

    .login-box a:hover {
        color: #F5ECCE ;
    }
    .login-box h1 {
    margin-top: 0px;
    font-family: 'Permanent Marker', cursive;
    color: #fff;
    font-size: 40px;
  }
  .login {
        position: relative;
        z-index: 50;

    }
    /* login */
    .bg-modal1 {
        margin-bottom: 300px;
        margin-right: 600px;
        background-color: rgba(0, 0, 0, 0.8); ;
        width: 1250px;
        height: 600px;
        position: absolute;
        z-index: auto ;
        top: 0;
        
        justify-content: center;
        align-items: center;
        display: none;

    }


    .modal-contents1 {

        background-color: red;
        height: 415px;
        width: 315px;
        
        padding: 20px;
        position: relative;
        text-align: center;
        border-radius: 4px white;
    }

    input {
        margin: 15px auto;
        display: block;
        width: 50%;
        padding: 8px;
        border: 1px solid gray;
    }

    .close1 {
        position: absolute;
        top: 2px;
        right: 10px;
        font-size: 20px;
        color: white;
        transform: rotate(45deg);
        cursor: pointer;

    }
</style>


<?php

	 if(isset($_POST['register'])){
		$c_name=$_POST['c_name'];
		$c_email=$_POST['c_email'];
		$c_pass=$_POST['c_pass'];
		$insert="insert into customers(name,email,password,role) values('$c_name','$c_email','$c_pass',customer)";
		$run_c=mysqli_query($conn,$insert);
        if($run_c){
			echo '<script>alert("insert thanh cong")</script>';
			
		}
	}
?>

<body>

<nav class="navbar navbar-inverse"  >
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/logo.png" style="padding-top : 10px ;">
    </div>

      <div class="login">
      <a ><button class="button1" id="button">SignUp</button></a>
       
        <div class="bg-modal">
            <div class="modal-contents">
                <div class="signup-form"> 
                <h1>Sign Up</h1>
                  <div class="close">+</div>
                     <form action="index.php?xem=dangky" method="post" enctype="multipart/form-data" >
                         <input type="text" name ="c_name" placeholder="Full Name" class="txtb">
                         <input type="email" name="c_email" placeholder="Email" class="txtb">
                         <input type="password" name="c_pass"placeholder="Password" class="txtb">
                         <input type="submit" name="register" value="Create Account" class="signup-btn">
                         
                        </form>
                </div> 
            </div>
        </div>
    </div>
    
        <a href="index.php?xem=login"><button class="button1">Login</button></a>

  </div>
    
  </div> 
</nav>

<div class="container">
  
  <div class="row">
    <div class="col-sm-3">
      <div class="list-group">
      <center>
    <a href="#" class="list-group-item active" style ="text-transform : uppercase ; front-weight : bold ;">Danh Mục Sản Phẩm</a>
    </center>
    <a href="#" class="list-group-item" >Sách Trong Nước</a>
    <a href="#" class="list-group-item" >FOREIGN BOOKS</a>
    <a href="#" class="list-group-item" >VPP-Dụng Cụ Học Sinh</a>
    <a href="#" class="list-group-item" >Đồ Chơi Lưu Niệm</a>
    <a href="#" class="list-group-item" >Tuyển Tập</a>
    <a href="#" class="list-group-item" >Sách Theo Nhà Cung Cấp</a>
    <a href="#" class="list-group-item" >Tiểu Thuyết</a>
    <a href="#" class="list-group-item" ><h5>VPP-DCHS Theo Thương Hiệu</h5></a>

      </div>
    </div>
  
    <div class="col-sm-9">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img  src="https://cdn0.fahasa.com/media/magentothem/banner7/pd915x423.jpg" alt="" style="width:100%">
      </div>

      <div class="item">
        <img  src="https://cdn0.fahasa.com/media/magentothem/banner7/TrangTongT12-3_main_920x420.jpg" style="width:100%">
      </div>
    
      <div class="item">
        <img  src="https://cdn0.fahasa.com/media/magentothem/banner7/TTMBanner920x420.jpg" style="width:100%;">
      </div>
      <div class="item">
        <img  src="https://cdn0.fahasa.com/media/magentothem/banner7/Trang-NCC-T12_920x420.jpg" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
     </div>
    </div>
  </div>
<div class="container">
  <div class="row">
    <div class = col-sm-4>
    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-12-2019/fahasa-s-day-rs-310x210.png" alt="">
    </div>    
    <div class = col-sm-4>
    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-12-2019/fahasa-s-day-rs-310x210-2.png" alt="">
    </div>  
    <div class = col-sm-4>
    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-12-2019/fahasa-s-day-rs-310x210-4.png" alt="">
    </div>  
  </div>
  </div>
<br><br>
</body>
<script>
        document.getElementById('button').addEventListener("click", function () {
            document.querySelector('.bg-modal').style.display = "flex";
        });
        document.querySelector('.close').addEventListener("click", function () {
            document.querySelector('.bg-modal').style.display = "none";
        });
 </script>
  <script>
        document.getElementById('.CheckLogin').addEventListener("click", function () {
            document.querySelector('.bg-modal1').style.display = "flex";
        });
        document.querySelector('.close1').addEventListener("click", function () {
            document.querySelector('.bg-modal1').style.display = "none";
        });
 </script>
</html>

