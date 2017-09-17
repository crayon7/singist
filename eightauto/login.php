<?php   session_start(); ?>
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
  <title>8auto | Login</title>
</head>
<body>

<!-- header -->
<?php include("header.php"); ?>
<!-- end header -->
<!-- start page title -->
  <div class="container page-title">
    <div class="row" >
      <div class="breadcrumb">Login</div>
    </div>
  </div><br>
<!-- end page title -->
<!-- content -->
<div id="main-content">
<div class="col-sm-4"></div>

<div class="col-sm-4">
<h2> User Login </h2>
  <form action="loginprocess.php" method="POST" name="login">

    <div class="form-group">
      <label for="email"> Email </label>
      <input type="text" name="email" id="email" class="form-control" required/>
    </div>
    <div class="form-group">
      <label for="password"> Password </label>
      <input type="password" name="password" id="password" class="form-control" required/>
    </div>
    <div class="form-group">
      <input type="submit" value="Login" name="btnlogin" class="btnlogin"/>
    </div>

  </form>
</div>
<div class="col-sm-4"></div>
</div>
<!-- end content -->

<!-- footer -->
<?php include("footer.php"); ?>
<!-- end footer -->

</body>
</html>
