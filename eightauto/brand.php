<?php
  session_start();
  require_once("admin/database/conn.php"); 
  connect();
  $query=mysql_query("SELECT * FROM brand ORDER BY brandid DESC");
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
  <title>8auto | brand</title>
</head>
<body>

<!-- header -->
<?php include("header.php"); ?>
<!-- end header -->

<!-- start page title -->
    <div class="container page-title">
      <div class="row">
       <div class="breadcrumb">Brands</div>
      </div>
    </div>
<!-- end page title -->

<!-- Content Start -->
<div id="main-content">
    <div class="container">
      <div class="row">

      <?php while($row=mysql_fetch_array($query)) : ?>

        <div class="col-sm-4">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h2><?php echo $row['name'] ?></h2>
            </div>
            <div class="panel-body">
              <div class="img-middle">
              <img src="admin/images/brandlogo/<?php echo $row['logo'] ?>"/>
              </div>
            </div>
            <div class="panel-footer view">
              <a href="each-brand.php?bid=<?php echo $row['brandid'] ?>">View</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      </div>
    </div>
</div>
  <!-- Content End -->

<!-- footer -->
  <?php include("footer.php"); ?>
<!-- end footer -->

</body>
</html>
