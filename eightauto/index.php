<?php
  session_start();
  require_once("admin/database/conn.php");

  connect();

  $cart=0;
  if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $qty){
      $cart += $qty;
    }
  }

  if(isset($_GET['bid'])){
    $bid=$_GET['bid'];
    $model=mysql_query("SELECT * FROM model WHERE brandid=$bid ORDER BY brandid DESC");
  }elseif(isset($_GET['s'])){
    $name=$_GET['s'];
    $model=mysql_query("SELECT * FROM model WHERE name='$name'");
  }
  else
  {
    $model=mysql_query("SELECT * FROM model ORDER BY id DESC LIMIT 12");
  }

  $brand=mysql_query("SELECT * FROM brand");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/png" href="admin/images/favicon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <title>8auto</title>
</head>
<body class="front">

<!-- header -->
<?php
  include("header.php");
?>
<!-- end header -->

<!-- slider -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="admin/images/slideshow/slide-1.jpg" width="450" height="300">
        <div class="carousel-caption">
        <h1>WE ARE NUMBER 1 MATTRESS BRAND IN MYANMAR</h1>
        	
        </div>
      </div>

      <div class="item">
        <img src="admin/images/slideshow/slide-2.jpg" width="450" height="300">
        <div class="carousel-caption">
        <h1>WE ARE NUMBER 1 MATTRESS BRAND IN MYANMAR</h1>
        	
        </div>
      </div>
    
      <div class="item">
        <img src="admin/images/slideshow/slide-3.jpg" width="450" height="300">
        <div class="carousel-caption">
        <h1>WE ARE NUMBER 1 MATTRESS BRAND IN MYANMAR</h1>
        	
        </div>
      </div>

      <div class="item">
        <img src="admin/images/slideshow/slide-4.jpg" width="450" height="300">
        <div class="carousel-caption">
        <h1>WE ARE NUMBER 1 MATTRESS BRAND IN MYANMAR</h1>
        	
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<!-- end slider -->
<!-- start page title -->

    <div class="container your-cart">
      <div class="row">
        <a href="view-cart.php">[<?php echo $cart ?>] Cars model in your cart</a>
      </div>
    </div>
<!-- end page title -->
<!-- content -->
<div id="main-content">
  <div class="container brand">
    <div class="row">
      <ul class="brand-list">
        <li> <a href="index.php"> All </a></li>
        <?php while($brow=mysql_fetch_array($brand)) { ?>
        <li>
          <a href="index.php?bid=<?php echo $brow['brandid'] ?>"> <?php echo $brow['name'] ?></a>
        </li>
        <?php } ?>
      </ul>
      <div class="search-form">
        <form action="index.php" method="get" class="search">
          <input type="text" name="s" placeholder="Search by car model">
          <input type="submit" value=" ">
        </form>
      </div>
    </div>
  </div>
  <div class="container model">
    <div class="row">
      <ul class="model-list">
      <?php while($mrow=mysql_fetch_array($model)) { ?>
      <li class="col-sm-4">
        <div class="image-field">
          <img src="admin/images/carphoto/<?php echo $mrow['photo'] ?>" alt=""/>
        </div>
        <div class="title-field">
          <a href="model-detail.php?id=<?php echo $mrow['id'] ?>"> <?php echo $mrow['name'] ?> </a>
        </div>
        <div class="engine-power-field">
          <?php echo $mrow['enginepower'] ?>
        </div>
        <div class="price-field">
          $<?php echo $mrow['price'] ?>
        </div>
        <div class="view-detail">
          <a href="model-detail.php?id=<?php echo $mrow['id'] ?>"> View Detail </a>
        </div>
      </li>
      <?php } ?>
      </ul>
    </div>
  </div>
</div>
<!-- end content -->
<!-- footer -->
  <?php include('footer.php'); ?>
<!-- end footer -->

</body>
</html>
