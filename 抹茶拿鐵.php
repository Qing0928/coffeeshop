<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>抹茶拿鐵</title>
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
		background-color: #dcab6b;	
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
  button{
	background-image:url(中間背景.jpg);
	background-color: #6a381f;
  }
   </style>
</head>
<body>
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
    </ul>
  </div>  
</nav>
	<div class="container">
		<div style="height:80vh;">
  <h2><b>其他飲品</b></h2>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="抹茶拿鐵.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">抹茶拿鐵</h4>
	  <h2>介紹</h2>
      <p class="card-text">抹茶拿鐵咖啡 拿鐵的意思是將牛奶注入咖啡，拿鐵並不代表是咖啡，它是意大利文裡牛奶的意思。 ... 抹茶拿鐵不是咖啡，
	  而是抹茶粉加上糖水再加上熱牛奶（或者冰的）和奶泡混合而成，沒有咖啡的成分。</p>
	  <?php error_reporting(0); ?>
            <?php
            $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8' , 'yucheng', 'coffeeshop');
            $sql=$pdo->prepare('select * from products where id=7');
            $sql->execute($id);
            foreach($sql->fetchAll() as $row){
              echo '<p>價格：', $row['price'], '</p>';
            }
            echo '<form action="cart_insert.php" method="post">';
            echo '<p>數量：<select name="count">';
            for ($i=1; $i<=20; $i++) {
               echo '<option value="', $i, '">', $i, '</option>';
            }
            echo '</select></p>';
            echo '<input type="hidden" name="id" value="', $row['id'], '">';
            echo '<input type="hidden" name="name" value="', $row['name'], '">';
            echo '<input type="hidden" name="price" value="', $row['price'], '">';
            echo '<p><input type="submit" class="btn-primary" value="放入購物車"></p>';
            echo '</form>';
            ?>
	  <p class="card-text"></p>

    </div>
  </div>
    </div>
    </div>
  
  <div class="text-center" style="color:white; font-size:18px; height: 150px; line-height: 150px; background-image: url('images/Footer.png'); background-repeat: no-repeat; background-size: cover;">
	<span><i class="fas fa-coffee"></i> 侯佳典 <i class="fas fa-coffee"></i> 林昱丞 <i class="fas fa-coffee"></i> 李永豐 </span>
	<span>© CoffeeOffice 2020</span>
</body>
</html>