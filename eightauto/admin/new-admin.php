<?php   
  require_once("database/adminauth.php"); 
  require_once("database/conn.php"); 
  connect();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"> </script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/adminstyle.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <title>8auto | New Admin</title>
</head>
<body>
<!-- header -->
<?php include("header.php"); ?>
<!-- end header -->

  <!-- start page title -->

    <div class="container page-title">
      <div class="row">
       <div class="breadcrumb">New Admin</div> 
      </div>

    </div>
  <!-- end page title -->

  <!--start form registeration-->
  <div class="container-fluid">
    <div class="row register-title">
      <h2 class="text-center">Admin Account Register</h2>
    </div>
    <div class="row">
      <div class="col-sm-4">

      </div>
      <div class="col-sm-4">

        <!-- Start Form -->
        <form action="admin-register.php" method="POST" name="adminregister">

        <div class="form-group">
        <label for="username">Username</label>
          <input type="text" name="username" class="form-control" required>
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
            <label for="usertype">Select Role</label>
            <select class="form-control" id="usertype" name="usertype">
                <option>Administrator</option>
                <option>Editor</option>          
            </select>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary btn-block" name="btnregister" value="Register">
        </div>

        </form>
        <!-- End form -->

      <div class="col-sm-4">
      </div>
    </div>
  </div>
</div>
<!--End Registration form-->

<br>

  <!-- footer -->
  <?php include("footer.php"); ?>
  <!-- end footer -->
</body>
</html>