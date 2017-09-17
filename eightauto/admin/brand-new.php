<?php 
require_once("database/adminauth.php");
require_once("database/conn.php"); 
connect();
?>

<!DOCTYPE html>
<html>
<head>
  <title>8auto | Brand New</title>
  <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"> </script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/adminstyle.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body>
<!-- header -->
<?php include("header.php"); ?>
<!-- end header -->

<!-- start page title -->

  <div class="container page-title">
    <div class="row">
    <div class="breadcrumb">Brand New</div>
    </div>

  </div>

  <!-- end page title -->
  
  <!-- start content -->

 	<div class="container">
		<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <!-- Start Form -->
      <form action="brand-add.php" method="POST" name="brandnew" enctype="multipart/form-data">

      <div class="form-group">
        <label for="bname">Brand Name</label>
        <input type="text" name="bname" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="blogo">Brand Logo</label>
        <input type="file" name="blogo" id="blogo" class="form-control" required>
      </div>

      <div class="form-group form-action">
        <input type="submit" class="btn btn-primary btn-block" name="btnaddbrand" value="Add Brand"/>
        <a href="brand-list.php" class="back"> Back </a>
      </div>

      </form>
        <!-- End form -->
      </div>
      <div class="col-sm-4"></div>
		</div>
	</div>

  <!-- end content -->
  <!-- footer -->
  <?php include("footer.php"); ?>
  <!-- end footer -->
</body>
</html>