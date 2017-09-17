<?php 
  require_once("database/adminauth.php");
  require_once("database/conn.php");
  connect();
  $query=mysql_query("SELECT * FROM contact ORDER BY id DESC LIMIT 12");

  if(isset($_REQUEST['btnreply'])){
    $id=$_REQUEST['id'];
    $replyfb=$_REQUEST['replyfb'];
    $adminreply=mysql_query("UPDATE contact SET reply='$replyfb' WHERE id='$id'");
    header("location:feedback.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>8auto | Feedback</title>
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
     <div class="breadcrumb">Feedback</div>
    </div>
  </div>
<!-- end page title -->

<!--content-->
  <div class="container">
    <div class="row">
    <div class="col-md-12">
    <ul class="feedback-list">
      <?php while($row=mysql_fetch_array($query)) : ?>
      <li>
        <div class="cust-fb">
          <h4> <?php echo $row['name'] ?> </h4>
          <em> <?php echo $row['subject'] ?> </em>
          <p> <?php echo $row['message'] ?> </p>
        </div>
        <form action="#" method="POST" id="admin-feedback" name="adminfeedback">
          <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
          <textarea class="reply-feedback" name="replyfb"><?php echo $row['reply'] ?> </textarea>
          <input type="submit" name="btnreply" class="reply-btn" value="Reply">
        </form>
      </li>
      <?php endwhile; ?>
    </ul>
    </div>
    </div>
  </div>  
<!--end content-->
<!-- footer -->
  <?php include("footer.php"); ?>
<!-- end footer -->
</body>
</html>