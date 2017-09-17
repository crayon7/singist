<?php
	session_start();
	require_once("admin/database/conn.php");
	connect();

	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$address=$_REQUEST['address'];
	$daddress=$_REQUEST['daddress'];

	mysql_query("INSERT INTO orders (name, email, phone, address, daddress, created_date, modified_date) values ('$name','$email','$phone', '$address','$daddress', now(), now())");
	$order_id=mysql_insert_id();
	foreach($_SESSION['cart'] as $id=> $qty){
		mysql_query("INSERT INTO order_detail (order_id, model_id, qty) values ($order_id, $id, $qty)");
	}
	unset($_SESSION['cart']);
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
  <title>8auto | Order Submitted</title>
</head>
<body>

<!-- header -->
<?php include("header.php"); ?>
<!-- end header -->
<!-- content -->
<!-- start page title -->
  <div class="container page-title">
    <div class="row">
      <div class="breadcrumb">Order Submitted</div>
    </div>
  </div>
<!-- end page title -->
<div id="main-content">
	<div class="container msg">
		<div class="row">
			Your order has been submitted. We'll deliver the items soon.
			<a href="index.php" class="done"> 8auto Home </a>
		</div>
	</div>
</div>
<!-- end content -->
<!-- footer -->
<?php include("footer.php"); ?>
<!-- end footer -->

</body>
</html>