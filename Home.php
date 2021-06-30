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

<!-- 首頁圖 -->
<div class="text-center text-light" style="background-image: url('images/首頁刊板.jpg'); height: 600px; padding-top:200px">
  <p style="font-size: 60px;">Welcom to CoffeeOffice</p> 
</div>


<div class="container-fluid" style="background-image: url('images/中間背景.jpg');  background-repeat: no-repeat; background-size: cover;">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-7" style="">
			<div class="container" style="padding:20px 100px;">
	
				<h2 style="text-align: center; color: #ffffb3">本周熱門</h2>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- 連結導引項目 -->
					<ul class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
						<li data-target="#myCarousel" data-slide-to="1" ></li>
						<li data-target="#myCarousel" data-slide-to="2" ></li>
						<li data-target="#myCarousel" data-slide-to="3" ></li>
					</ul>
					<!-- 幻燈片圖片 -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="images/a.jpg" >
						</div>
						<div class="carousel-item">
							<img src="images/b.jpg"  >
						</div>
						<div class="carousel-item">
							<img src="images/c.jpg" >
						</div>
						<div class="carousel-item">
							<img src="images/d.jpg" >
						</div>
					</div>
					<!-- 左右控制指示 -->
					<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#myCarousel" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>	
			</div>
		</div>  
		<div class="col-sm-12 col-md-12 col-lg-5" style=" background-image: url('images/通知區.jpg');  background-repeat: no-repeat; background-size: 100% 100%">
			<div class="container" style="margin-top:20px; margin-bottom:20px;">
				<h3 style="text-align: center; color: #ffffb3">本周特價商品</h3>

				<div style="padding:50px 120px; font-size:30px; color: #6a381f; text-align: center; font-family:HanWangGB06;font-weight:bold;">
				<?php
					echo "冰拿鐵:<br>";
					echo "特價$80<br>";
					echo "咖啡豆餅乾:<br>";
					echo "特價$60<br><br><br><br><br><br>";
					echo "來店打卡即送星冰樂1杯";
				?>
				</div>
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
