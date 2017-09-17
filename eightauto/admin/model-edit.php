<?php 
require_once("database/adminauth.php");
require_once("database/conn.php"); 
connect();
?>

<!DOCTYPE html>
<html>
<head>
  <title>8auto | Model Edit</title>
  <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"> </script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/adminstyle.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body class="model-edit">
<!-- header -->
<?php include("header.php"); ?>
<!-- end header -->

<!-- start page title -->

  <div class="container page-title">
    <div class="row">
    <div class="breadcrumb">Model Edit</div>
    </div>

  </div>

  <!-- end page title -->
  <?php
    $id=$_GET['id'];
    $query=mysql_query("SELECT * FROM model where id=$id");
    $row=mysql_fetch_array($query);
  ?>
  <!-- start content -->

 	<div class="container-fluid">
		<div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
    <!-- Start Form -->
      <form action="model-update.php" method="POST" name="modeledit" id="model-edit" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>"/>

      <div class="form-group">
        <label for="mname">Model Name</label>
        <input type="text" name="mname" class="form-control" value="<?php echo $row['name'] ?>">
      </div>
      <div class="form-group">
        <label for="transmission">Transmission</label>
        <input type="text" name="transmission" class="form-control" value="<?php echo $row['transmission'] ?>">
      </div>
      <div class="form-group">
        <label for="fueltype">Fuel Type</label>
        <input type="text" name="fueltype" class="form-control" value="<?php echo $row['fueltype'] ?>">
      </div>
      <div class="form-group">
        <label for="enginepower">Engine Power</label>
        <input type="text" name="enginepower" class="form-control" value="<?php echo $row['enginepower'] ?>">
      </div>
      <div class="form-group">
        <label for="color">Color</label>
         <select name="color" class="form-control">
        <?php $color=array('White','Black','Red','Blue','Yellow','Orange','Green','Brown','Pink','Silver', 'Grey') ?>
          <option value="<?php echo $row['color'] ?>"> <?php echo $row['color'] ?> </option>
        <?php foreach($color as $key => $value): ?>
          <option value="<?php echo $value ?>"><?php echo $value ?> </option> ;
        <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" class="form-control" value="<?php echo $row['price'] ?>" required>
      </div>
      <div class="form-group">
        <label for="brandid"> Brand </label>
        <select name="brandid" id="brandid" class="form-control">
          <option value="0">-- Choose -- </option>
          <?php
            $brand=mysql_query("SELECT brandid, name FROM brand");
            while($brow=mysql_fetch_array($brand)){
          ?>
          <option value="<?php echo $brow['brandid'] ?>" <?php if($brow['brandid']==$row['brandid']) echo "selected"; ?> > <?php echo $brow['name'] ?> </option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" required><?php echo $row['description'] ?> </textarea>
      </div>
      <div class="form-group">
        <img src="images/carphoto/<?php echo $row['photo'] ?>" alt="">
      </div>
      <div class="form-group">
        <label for="mphoto">Change Photo</label>
        <input type="file" name="mphoto" id="mphoto" class="form-control">
      </div>

      <div class="form-group form-action">
        <input type="submit" class="btn btn-primary btn-block" name="btnaddmodel" value="Update Model"/>
        <a href="index.php" class="back"> Back </a>
      </div>

      </form>
        <!-- End form -->
    </div>
    <div class="col-sm-4">
    </div>
		</div>
	</div>
  <!-- end content -->
  <!-- footer -->
  <?php include("footer.php"); ?>
  <!-- end footer -->
</body>
</html>