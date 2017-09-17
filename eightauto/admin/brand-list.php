<?php 
require_once("database/adminauth.php");
require_once("database/conn.php"); 
connect();

  $uname=$_SESSION['uname'];
  $user=mysql_query("SELECT usertype FROM user WHERE username='$uname'");
  $urow=mysql_fetch_array($user);
?>

<!DOCTYPE html>
<html>
<head>
<title>8auto | Brand List</title>
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
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
       <div class="breadcrumb">Brand List</div>
      </div>

    </div><br>

  <!-- end page title -->
  <?php
    $result=mysql_query("SELECT * FROM brand ORDER BY brandid DESC");
  ?>
  <!-- start content -->

    <div class="container">

      <div class="row brand-list">
      <?php 
        while($row=mysql_fetch_array($result)) : 
      ?>

        <div class="col-md-3 portfolio-item">
          <div class="panel panel-info text-center">


          <div class="panel-heading"><h2><?php echo $row['name'] ?></h2></div>
          <div class="panel-body">
          <div class="img-middle"><img src="images/brandlogo/<?php echo $row['logo'] ?>" class="pimg"/></div></div>
          <div class="panel-footer pfoot">
          <?php if($urow['usertype']=='Administrator') : ?>
            <a href="brand-edit.php?id=<?php echo $row['brandid'] ?>" class="edit"> Edit </a> 
            <a href="brand-delete.php?id=<?php echo $row['brandid'] ?>" class="del btndelete"> Delete </a>
          <?php else: ?>
            <a href="brand-edit.php?id=<?php echo $row['brandid'] ?>" class="edit"> Edit </a> 
          <?php endif; ?>
          </div>

          </div>
        </div>
      <?php endwhile; ?>

    
      </div>

      <a href="brand-new.php" class="btn btn-primary btn-block">Add New Brand</a>

    </div>

  <!-- end content -->
  <!-- footer -->
  <?php include("footer.php"); ?>
  <!-- end footer -->
</body>
</html>