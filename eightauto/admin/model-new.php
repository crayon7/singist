<?php 
require_once("database/adminauth.php");
require_once("database/conn.php"); 
connect();
?>

<!DOCTYPE html>
<html>
<head>
  <title>8auto | Model New</title>
  <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
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
    <div class="breadcrumb">Model New</div>
    </div>

  </div>

  <!-- end page title -->
  
  <!-- start content -->

 	<div class="container">
		<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <!-- Start Form -->
      <form action="model-add.php" method="POST" name="modelnew" enctype="multipart/form-data">

      <div class="form-group">
        <label for="mname">Model Name</label>
        <input type="text" name="mname" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="transmission">Transmission</label>
        <input type="text" name="transmission" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="fueltype">Fuel Type</label>
        <input type="text" name="fueltype" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="enginepower">Engine Power</label>
        <input type="text" name="enginepower" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="color">Color</label>
        <select name="color" class="form-control" required>
        <?php $color=array('White','Black','Red','Blue','Yellow','Orange','Green','Brown','Pink','Silver','Grey') ?>
          <option value=""> -- Choose -- </option>
        <?php foreach($color as $key => $value): ?>
          <option value="<?php echo $value ?>"><?php echo $value ?> </option> ;
        <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="brandid"> Brand </label>
        <select name="brandid" id="brandid" class="form-control">
          <option value="0">-- Choose -- </option>
          <?php
            $query=mysql_query("SELECT brandid, name FROM brand");
            while($row=mysql_fetch_array($query)){
          ?>
          <option value="<?php echo $row['brandid'] ?>"> <?php echo $row['name'] ?> </option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" required> </textarea>
      </div>
      <div class="form-group">
        <label for="mphoto">Model Photo</label>
        <input type="file" name="mphoto" id="mphoto" class="form-control file" required>
      </div>

      <div class="form-group form-action">
        <input type="submit" class="btn btn-primary btn-block" name="btnaddmodel" value="Add Model"/>
        <a href="index.php" class="back"> Back </a>
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