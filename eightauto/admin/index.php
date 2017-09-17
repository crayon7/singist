<?php 
  error_reporting(1);
  require_once("database/adminauth.php");
  require_once("database/conn.php"); 
  include("pagination.php");
  connect();
  
  $uname=$_SESSION['uname'];
  $user=mysql_query("SELECT usertype FROM user WHERE username='$uname'");
  $urow=mysql_fetch_array($user);

  // pagination //
$per_page = 12;         // number of results to show per page
$result = mysql_query("SELECT model.*, brand.name as bname FROM model LEFT JOIN brand ON model.brandid= brand.brandid ORDER BY model.created_date DESC");
$total_results = mysql_num_rows($result);
$total_pages = ceil($total_results / $per_page);//total pages we going to have

//-------------if page is setcheck------------------//
if (isset($_GET['page'])) {
    $show_page = $_GET['page'];             //it will telles the current page
    if ($show_page > 0 && $show_page <= $total_pages) {
        $start = ($show_page - 1) * $per_page;
        $end = $start + $per_page;
    } else {
        // error - show first set of results
        $start = 0;              
        $end = $per_page;
    }
} else {
    // if page isn't set, show first set of results
    $start = 0;
    $end = $per_page;
}
// display pagination
$page = intval($_GET['page']);

$tpages=$total_pages;
if ($page <= 0)
    $page = 1;
?>

<!DOCTYPE html>
<html>
<head>
  <title>8auto | Model List</title>
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
       <div class="breadcrumb">Model List</div>
      </div>
    </div>
<!-- end page title -->

<!--content-->
  <div class="container">
    <div class="new-model">
      <a href="model-new.php" class="btn btn-primary btn-block">Add New Model</a>
    </div>
  <ul class="model-list">

  <?php 
  for ($i = $start; $i < $end; $i++)  
  {
    if ($i == $total_results)
     {
     break;
     }
  ?>

    <li class="list-detail">
    <div class="row">
      <div class="col-sm-4"> 
        <img src="images/carphoto/<?php echo mysql_result($result, $i, 'photo'); ?>" alt=""/>
      </div>
      <div class="col-sm-8"> 
        <h2><?php echo mysql_result($result, $i, 'name'); ?> </h2>
        <ul class="model-label">
          <li>Brand</li>
          <li>Transmission</li>
          <li>Fuel Type </li>
          <li>Engine Power </li>
          <li>Color </li>
          <li>Price </li>
        </ul>
        <ul class="model-data">
          <li><?php echo mysql_result($result, $i, 'bname'); ?></li>
          <li><?php echo mysql_result($result, $i, 'transmission'); ?></li>
          <li><?php echo mysql_result($result, $i, 'fueltype'); ?></li>
          <li><?php echo mysql_result($result, $i, 'enginepower'); ?></li>
          <li><?php echo mysql_result($result, $i, 'color'); ?></li>
          <li>$<?php echo mysql_result($result, $i, 'price'); ?></li>
        </ul>
        <p><?php echo mysql_result($result, $i, 'description'); ?> </p>
      </div>
    </div>
    <div class="row link">
    <?php if($urow['usertype']=='Administrator') : ?>
      <a href="model-edit.php?id=<?php echo mysql_result($result, $i, 'id'); ?>" class="btn btn-primary btn-block btnedit"> Edit </a>
      <a href="model-delete.php?id=<?php echo mysql_result($result, $i, 'id'); ?>" class="btn btn-primary btn-block btndelete"> Delete </a>
    <?php else: ?>
      <a href="model-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-block btnedit"> Edit </a>
    <?php endif; ?>
    </div>
    </li>

  <?php } ?>

  </ul>

  <div class="new-model">
    <a href="model-new.php" class="btn btn-primary btn-block">Add New Model</a>
  </div>

  <div id="pager">
   <?php 
    $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages;
      echo '<div  class="pagination"><ul>';
      if ($total_pages > 1) {
        echo paginate($reload, $show_page, $total_pages);
      }
      echo "</ul></div>";
  ?>
  </div>

  </div>  
  <!--end content-->

  <!-- footer -->
  <?php include("footer.php"); ?>
  <!-- end footer -->

</body>
</html>