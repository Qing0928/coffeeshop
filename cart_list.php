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



<div class="container-fluid" style="height: 80vh; background-image: url('images/中間背景.jpg');  background-repeat: no-repeat; background-size: cover;">
<div class="container">
  <h2>購物車</h2>
  <div class="card">
    <div class="card-body">
    <?php error_reporting(0); ?>
	<?php
	session_start();
	if (!empty($_SESSION['products'])) {
		echo '<table  class="table table-striped ">';
		echo '<th>商品名稱</th>';
		echo '<th>價格</th><th>數量</th><th>小計</th><th></th>';
		$total=0;
		foreach ($_SESSION['products'] as $id=>$products) {
			echo '<tr>';
			echo '<td><a href="detail.php?id=', $id, '">',$products['name'], '</a></td>';
			echo '<td>', $products['price'], '</td>';
			echo '<td>', $products['count'], '</td>';
			$subtotal=$products['price']*$products['count'];
			$total+=$subtotal;
			echo '<td>', $subtotal, '</td>';
			echo '<td><a href="cart_delete.php?id=', $id, '">刪除</a></td>';
			echo '</tr>';
		}
		echo '<tr><td>合計</td><td></td><td></td><td></td><td>', $total,
			'</td></tr>';
		echo '</table>';
	} else {
		echo '<p>購物車是空的喔</p>';
	}
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

