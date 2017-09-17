<?php 
  session_start();
  if(!isset($_SESSION['cart'])){
    header("location:index.php");
    exit();
  }
  if(!isset($_SESSION['email'])){
    echo "<script>alert(\"Please you need login!\");</script>";
    echo "<script language=\"javascript\">
      window.location.href=\"index.php\";</script>";
  }
  require_once("admin/database/conn.php"); 
  connect();

  $email=$_SESSION['email'];
  $customer=mysql_query("SELECT * FROM customer WHERE email='$email'");

?>

<!DOCTYPE html>
<html>
<head>
  <title>8auto | View Cart</title>
  <link rel="shortcut icon" type="image/png" href="admin/images/favicon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body class="view-cart">
<!-- header -->
  <?php include("header.php"); ?>
<!-- end header -->

<!-- start page title -->
  <div class="container page-title">
    <div class="row">
      <div class="col-sm-6 breadcrumb">View Cart</div>
      <ul class="col-sm-6 cart-option">
        <li><a href="index.php">&laquo; Continue Shopping </a></li>
        <li><a href="clear-cart.php" class="clear-cart">&times; Clear Cart</a></li>
      </ul>
    </div>
  </div>
<!-- end page title -->

<!--content-->
<div id="main-content">
  <div class="container voucher">
    <div class="row">
      <table>
      <thead>
        <tr>
          <th> Model </th>
          <th> Quantity </th>
          <th> Unit Price </th>
          <th> Price </th>
        </tr>
      </thead>
      <tbody>
    <?php
      $total=0;
      foreach($_SESSION['cart'] as $id=>$qty)
      {
        $result=mysql_query("SELECT name, price FROM model WHERE id=$id");
        $row=mysql_fetch_array($result);
        $total+=$row['price'] * $qty;
    ?>
        <tr>
          <td> <?php echo $row['name'] ?></td>
          <td> <?php echo $qty ?></td>
          <td> <?php echo $row['price'] ?> </td>
          <td> <?php echo $row['price'] * $qty ?> </td>
        </tr>
    <?php } ?>
      </tbody>
      <tfoot>
        <tr>
        <td colspan="3" class="total"> Total </td>
        <td> <?php echo $total ?> </td>
        </tr>
      </tfoot>
      </table>
    </div>
  </div>

  <div class="container order-form">
    <div class="row">
    <?php while($custrow=mysql_fetch_array($customer)) { ?>
    <div class="col-sm-6">
      <form action="send-order.php" method="POST">
        <div class="form-group">
          <label for="name"> Name </label>
          <input type="text" name="name" class="form-control" value="<?php echo $custrow['name'] ?>" readonly/>
        </div>
        <div class="form-group">
          <label for="email"> Email </label>
          <input type="text" name="email" class="form-control" value="<?php echo $custrow['email'] ?>" readonly/>
        </div>
        <div class="form-group">
          <label for="phone"> Phone </label>
          <input type="text" name="phone" class="form-control" value="<?php echo $custrow['phone'] ?>" readonly/>
        </div>
        <div class="form-group">
          <label for="address"> Address </label>
          <textarea name="address" class="form-control" readonly> <?php echo $custrow['address'] ?> </textarea>
        </div>
        <div class="form-group">
          <label for="daddress"> Delivery Address </label>
          <textarea name="daddress" class="form-control" required>  </textarea>
        </div>
        <div class="form-group form-action">
          <input type="submit" class="btn btn-primary btn-block" name="btnorder" value="Send Order"/>
          <a href="index.php" class="back"> Continue Shopping </a>
        </div>
      </form>
    </div>
    <?php } ?>
    <div class="col-sm-6">
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