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
<style>
#box {  
border: 1px solid rgb(200, 200, 200);   
box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px; 
background: rgba(200, 200, 200, 0.1);   
border-radius: 4px; top:50px;
}
 
h2 {    
text-align:center;  
color:#FF4000;
}
</style>
<body>
<div class="container-fluid"> 
 <div class="row-fluid"> 
  <div class="col-md-offset-4 col-md-4" id="box"> 
   <h2>Đăng Nhập Và Mua Hàng</h2> 
   <hr> 
   <form class="form-horizontal" action="" id="login_form " method="post"> 
    <fieldset> 
     <div class="form-group"> 
      <div class="col-md-12"> 
       <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> <input name="email" placeholder="Enter Email" class="form-control" type="text"> 
       </div> 
      </div> 
     </div> 
     <div class="form-group"> 
      <div class="col-md-12"> 
       <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> <input name="password" placeholder="Password" class="form-control" type="text"> 
       </div> 
      </div> 
     </div> 
     <div class="form-group"> 
      <div class="col-md-12"> 
       <button type="submit" class="btn btn-md btn-danger pull-right" name="login">Đăng nhập </button> 
       <a><button type="submit" class="btn btn-md btn-warning pull-left" id="button">Đăng Kí </button> </a>
      </div> 
     </div> 
    </fieldset> 
   </form> 
  </div> 
 </div>
</div>

</body>
<script>
        document.getElementById('button').addEventListener("click", function () {
            document.querySelector('.bg-modal').style.display = "flex";
        });
        document.querySelector('.close').addEventListener("click", function () {
            document.querySelector('.bg-modal').style.display = "none";
        });
 </script>