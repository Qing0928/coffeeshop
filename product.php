<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>商品頁</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <style>
   	.fakeimg {
		height: 200px;
		background: #aaa;
	}
  
	.navlihoverbg li:hover {
		background-color:#dcab6b;	
	}
  
   	body{
		background-image:url(中間背景.jpg);
		background-repeat: no-repeat; 
		background-size: cover;
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
<div style="height:80vh;">
<div style="margin-left:50px; margin-top:100px;">
<section>
	<div class="btn-group" role="group">
		<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" style="background-color:#dcab6b">
		咖啡飲品
		</button>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="手沖咖啡.php">手沖咖啡</a>
			<a class="dropdown-item" href="冰拿鐵.php">冰拿鐵</a>
			<a class="dropdown-item" href="卡布奇諾.php">卡布奇諾</a>
		</div>
	</div>
</section>

<section>
		<div class="btn-group" role="group">
		<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" style="background-color:#dcab6b">
		&nbsp&nbsp&nbsp&nbsp甜點&nbsp&nbsp&nbsp
		</button>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="咖啡凍.php">咖啡凍</a>
			<a class="dropdown-item" href="咖啡奶酪.php">咖啡奶酪</a>
			<a class="dropdown-item" href="咖啡豆餅乾.php">咖啡豆餅乾</a>
			<a class="dropdown-item" href="鬆餅.php">鬆餅</a>
		</div>
	</div>
</section>

<section>
		<div class="btn-group" role="group">
		<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" style="background-color:#dcab6b">
		其他飲品
		</button>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="鴛鴦奶茶.php">鴛鴦奶茶</a>
			<a class="dropdown-item" href="星冰樂.php">星冰樂</a>
			<a class="dropdown-item" href="抹茶拿鐵.php">抹茶拿鐵</a>
		</div>
	</div>
</section>
</div>

	<div class="container" style="margin-top:-150px;">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">

	  <!-- Indicators -->
	  <ul class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
	  </ul>
	  
	  <!-- The slideshow -->
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <a href="#"><img src="鬆餅.jpg" alt="Wayne Market"></a>
		  <div class="carousel-caption">
		  <h3></h3>
		  </div>
		</div>
		<div class="carousel-item">
		  <a href="#"><img src="咖啡豆餅乾.jpg" alt="waynefood1">
		</div>
		<div class="carousel-item">
		  <a href="#"><img src="咖啡奶酪.jpg" alt="waynefood2">
		</div>
		<div class="carousel-item">
		  <a href="#"><img src="卡布奇諾.jpg" alt="waynefood3">
		</div>
		<div class="carousel-item">
		  <a href="#"><img src="咖啡凍.jpg" alt="waynefood4">
		</div>
	  </div>
	  
	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	  </a>
	</div>
	</div>
	</div>

<div class="text-center" style="color:white; font-size:18px; height: 150px; line-height: 150px; background-image: url('images/Footer.png'); background-repeat: no-repeat; background-size: cover;">
	<span><i class="fas fa-coffee"></i> 侯佳典 <i class="fas fa-coffee"></i> 林昱丞 <i class="fas fa-coffee"></i> 李永豐 </span>
	<span>© CoffeeOffice 2020</span>
</div>
</body>
</html>