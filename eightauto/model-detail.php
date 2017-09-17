<?php 
  session_start();
  require_once("admin/database/conn.php"); 
  connect();

  $id=$_GET['id'];
  $model=mysql_query("SELECT * FROM model WHERE id=$id");
  $row=mysql_fetch_array($model);
?>

<!DOCTYPE html>
<html>
<head>
  <title>8auto | Model Detail</title>
  <link rel="shortcut icon" type="image/png" href="admin/images/favicon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body class="model-detail">
<!-- header -->
  <?php include("header.php"); ?>
<!-- end header -->

<!-- start page title -->
  <div class="container page-title">
    <div class="row">
      <div class="breadcrumb"><a href="index.php" class="home"> Home</a> > <?php echo $row['name'] ?></div>
    </div>
  </div>
<!-- end page title -->

<!--content-->
<div id="main-content">
 <div class="container">
  <div class="row detail">
    <div class="col-sm-4 image-field">
      <img src="admin/images/carphoto/<?php echo $row['photo'] ?>" alt=""/>
    </div>
    <div class="col-sm-8 text-field">
      <h2> <?php echo $row['name'] ?> </h2>
      <ul class="model-data">
        <li><?php echo $row['transmission'] ?></li>
        <li><?php echo $row['fueltype'] ?></li>
        <li><?php echo $row['enginepower'] ?></li>
        <li><?php echo $row['color'] ?></li>
        <li>$<?php echo $row['price'] ?></li>
      </ul>
      <p><?php echo $row['description'] ?></p>
      <a href="add-to-cart.php?id=<?php echo $row['id'] ?>" class="add-to-cart"> Add To Cart</a>
    </div>
  </div>
 </div>
 </div>
<!--end content-->

<!-- footer -->
  <?php include("footer.php"); ?>
<!-- end footer -->

</body>
</html>