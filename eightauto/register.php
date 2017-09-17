<?php 
  session_start();
include("registerprocess.php");
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
  <title>8auto | Register</title>
</head>
<body>

<!-- header -->
<?php include("header.php"); ?>
<!-- end header -->

<!-- content -->
<div class="container page-title">
<div class="row">
<div class="breadcrumb">Register</div>
</div>
</div>

<div id="main-content">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
  <h2>Customer Register</h2>
        <!-- Start Form -->
        <form action="registerprocess.php" method="POST" name="adminregister">

        <div class="form-group">
        <label for="name">Name</label>
          <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="confirm password">confirm password</label>
          <input type="password" name="cpassword" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone No</label>
          <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <textarea name="address" class="form-control" required> </textarea>
        </div>

        <div class="form-group">
          <input type="submit" class="btnregister" name="btnregister" value="Register">
        </div>

        </form>
        <!-- End form -->
      </div>
      <div class="col-sm-4"></div>
</div>
<!-- end content -->

<!-- footer -->
<?php include("footer.php"); ?>
<!-- end footer -->

</body>
</html>
