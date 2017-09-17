<?php
  session_start();
  require_once("admin/database/conn.php");
  connect();

  if(isset($_GET['bid'])){
    $bid=$_GET['bid'];
    $model=mysql_query("SELECT * FROM model WHERE brandid=$bid ORDER BY brandid DESC");
  }else
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
  <title>8auto | Brands</title>
</head>
<body class="each-brand">

<!-- header -->
<?php
  include("header.php");
?>
<!-- end header -->
<?php  
  if(isset($_GET['bid'])){
    $bid=$_GET['bid'];
    $brandtitle=mysql_query("SELECT * FROM brand WHERE brandid=$bid");
    $btitle=mysql_fetch_array($brandtitle);
  }
?>
<!-- start page title -->
    <div class="container page-title">
      <div class="row">
       <div class="breadcrumb">Brands > <?php echo $btitle['name'] ?> </div>
      </div>
    </div>
<!-- end page title -->
<!-- content -->
<div id="main-content">
  <div class="container brand">
    <div class="row">
      <ul class="brand-list">
      <?php while($brow=mysql_fetch_array($brand)) { ?>
      <li>
        <a href="each-brand.php?bid=<?php echo $brow['brandid'] ?>"> <?php echo $brow['name'] ?></a>
      </li>
      <?php } ?>
      </ul>
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
