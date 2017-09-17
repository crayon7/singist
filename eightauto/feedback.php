<?php
  session_start();
  require_once("admin/database/conn.php"); 
  connect();
  
  $query=mysql_query("SELECT * FROM contact ORDER BY id DESC LIMIT 12");
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
  <title>8auto | Feedback</title>
</head>
<body>

<!-- header -->
<?php include("header.php"); ?>
<!-- end header -->

<!-- start page title -->
    <div class="container page-title">
      <div class="row">
       <div class="breadcrumb">Feedback</div>
      </div>
    </div>
<!-- end page title -->

<!-- Content Start -->
<div id="main-content">
    <div class="container">
      <div class="row">

    <ul class="feedback-list col-md-12">
      <?php while($row=mysql_fetch_array($query)) : ?>
      <li>
        <div class="cust-fb">
          <h4> <?php echo $row['name'] ?> </h4>
          <p> <?php echo $row['message'] ?> </p>
        </div>
        <div class="admin-reply">
          <h4> 8auto Admin </h4>
          <p> <?php echo $row['reply'] ?> </p>
        </div>
      </li>
      <?php endwhile; ?>
    </ul>

      </div>
    </div>
</div>
  <!-- Content End -->

<!-- footer -->
  <?php include("footer.php"); ?>
<!-- end footer -->

</body>
</html>
