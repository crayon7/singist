<?php
  error_reporting(1);
	require_once("database/adminauth.php");
	require_once("database/conn.php");
  include("pagination.php");

	connect();
//	$orders=mysql_query("SELECT * FROM orders ORDER BY id DESC");

  // pagination //
$per_page = 12;         // number of results to show per page
$result = mysql_query("SELECT * FROM orders ORDER BY id DESC");
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
<title>8auto | Order List</title>
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body class="order-page">
<!-- header -->
<?php include("header.php"); ?>
<!-- end header -->

	<!-- start page title -->
  <div class="container page-title">
    <div class="row">
    <div class="breadcrumb">Order List</div>
    </div>
  </div>
  <!-- end page title -->
  
  <!-- start content -->
 	<div class="container">
		<div class="row">
			<ul class="orders">

				  <?php 
					  for ($i = $start; $i < $end; $i++)  
					  {
					    if ($i == $total_results)
					    {
					    	break;
					  	}

					if(mysql_result($result, $i, 'status')): ?>

					<li class="delivered">
				<?php else: ?>
					<li>
				<?php endif; ?>
					<div class="col-sm-6 order">
						<h2> <?php echo mysql_result($result, $i, 'name'); ?></h2>
						<em> <?php echo mysql_result($result, $i, 'email'); ?></em>
						<em> <?php echo mysql_result($result, $i, 'phone'); ?></em>
						<p> <?php echo mysql_result($result, $i, 'daddress'); ?> </p>
						<?php if(mysql_result($result, $i, 'status')): ?>
							 <a href="order-status.php?id=<?php echo mysql_result($result, $i, 'id') ?>&status=0" class="complete deliver"> Undo</a>
						<?php else: ?>
							 <a href="order-status.php?id=<?php echo mysql_result($result, $i, 'id') ?>&status=1" class="wait deliver"> Delivered</a>
						<?php endif; ?>
					</div>
					<div class="col-sm-6 items">
						<?php
							$order_id=mysql_result($result, $i, 'id');
							$items=mysql_query("SELECT order_detail.*, model.name FROM order_detail LEFT JOIN model ON order_detail.model_id=model.id WHERE order_detail.order_id=$order_id") or die(mysql_error());
							while($item=mysql_fetch_array($items)) :
						?>
						<strong><a href="../model-detail.php?id=<?php echo $item['model_id'] ?>"> <?php echo $item['name'] ?> </a></strong>
						<em> (<?php echo $item['qty'] ?>) </em>
					<?php endwhile; ?>
					</div>
					</li>
				<?php } ?>
			</ul>
		</div>
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
  <!-- end content -->
  <!-- footer -->
  <?php include("footer.php"); ?>
  <!-- end footer -->
</body>
</html>