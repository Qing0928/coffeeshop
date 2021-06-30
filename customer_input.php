<!DOCTYPE html>
<html lang="en">
<head>
  <title>首頁</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/3910056419.js" crossorigin="anonymous"></script>
  <style>
	.fakeimg {
		height: 200px;
		background: #aaa;
	}
  
	.navlihoverbg li:hover {
		background-color: #dcab6b;	
	}
  
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }

  </style>
</head>
<body>

<!-- 導覽列 -->
<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #6a381f;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar" >
    <ul class="navbar-nav navlihoverbg" >
		<li class="nav-item" >
        <a class="nav-link" href="Home.php" style="color: #ffffb3">首頁</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="product.php" style="color: #ffffb3">商品頁</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart_list.php" style="color: #ffffb3">購物車</a>
      </li>    
	  <li class="nav-item">
        <a class="nav-link" href="purchase_input.php" style="color: #ffffb3">結帳</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="login/login_page.html" style="color: #ffffb3">登入</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="customer_input.php" style="color: #ffffb3">加入會員</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout_input.php" style="color: #ffffb3">登出</a>
      </li>
    </ul>
  </div>  
</nav>


<div style="padding:10%; height: 80vh; background-image: url('images/中間背景.jpg');  background-repeat: no-repeat; background-size: cover;">
	<div class="container" style=" width: 350px;">
	<h2 style="color:#6a381f;">加入會員</h2>
		<div class="card">
			<div class="card-body">
			<?php error_reporting(0); ?>
				<?php
				session_start();
				$name=$login=$password='';
				if(isset($_SESSION['customer'])){
					$name=$_SESSION['customer']['name'];
					$login=$_SESSION['customer']['login'];
					$password=$_SESSION['customer']['password'];
				}
				echo '<form action="customer_output.php" method="post">';
				echo '<div style="color:#6a381f;">姓名<input type="text" name="name" value=" ' , $name, '" class="form-control form-control-sm bg-light"></div>';
				
				echo '<div style="color:#6a381f;">帳號
					<input type="text" name="login" value="' , $login, '" class="form-control form-control-sm bg-light"></div>';
				
				echo '<div style="color:#6a381f;">密碼
					<input type="text" name="password" value="' , $password, '" class="form-control form-control-sm bg-light"></div>';
				echo '<br>';
				echo '<input type="submit" value="註冊" class="btn btn-warning">';
				echo '</form>';
				?>
			</div> 
		</div>
	</div>
</div>

<div class="text-center" style="color:white; font-size:18px; height: 150px; line-height: 150px; background-image: url('images/Footer.png'); background-repeat: no-repeat; background-size: cover;">
	<span><i class="fas fa-coffee"></i> 侯佳典 <i class="fas fa-coffee"></i> 林昱丞 <i class="fas fa-coffee"></i> 李永豐 </span>
	<span>© CoffeeOffice 2020</span>

</div>

</body>
</html>


