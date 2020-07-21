<?php session_start();
	if(isset($_POST['login'])){
		$c_email=$_POST['email'];
		$c_pass=$_POST['password'];
		$sel_c="select * from users where password='$c_pass' and email='$c_email'";
		$run_login=mysqli_query($conn,$sel_c);
		$check_login=mysqli_num_rows($run_login);
		if($check_login==0){
			echo '<script>alert("password or email incorrect")</script>';
		}else{
			$_SESSION['dangnhap']=$c_email;
			header('location:index.php?xem=cart');
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>



<body>
<div >
<a href="https://www.fahasa.com/xa-sale-don-fahasa-day">
<img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-12-2019/fahasa-s-day-rs-1263x80-v2.png" style="width:1280px"></a>
</div>

</body>


</html>