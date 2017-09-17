<?php 
  $uname=$_SESSION['uname'];
  $user=mysql_query("SELECT usertype FROM user WHERE username='$uname'");
  $urow=mysql_fetch_array($user);
?>

	 <!--Start header-->
  <div class="header">
    <div class="container">
      <div class="row">

        <div class="col-sm-3 logo">
          <div class="box">
            <a href="../index.php"><img src="images/8auto-logo.png" class="img-responsive"/></a>
          </div>
        </div>
        <div class="col-sm-6"> 
        </div>
        <div class="col-sm-3 admin-name"> 
          <?php
            if(!empty($_SESSION['uname']))
               echo $_SESSION['uname'];
          ?>
        </div>
      </div>
    </div>
  </div>
  <!--end-->

  <!--start navigation bar-->
  <div class="container-fluid nav">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php" class="list">Manage Model</a></li>
            <li><a href="brand-list.php" class="list">Manage Brand</a></li>
            <li><a href="orders.php" class="list">Manage Order</a></li>
            <li><a href="feedback.php" class="list">Feedback</a></li>

            <?php if($urow['usertype']=='Administrator') : ?>
            <li><a href="new-admin.php" class="list">New Admin</a></li>
            <?php endif; ?>

            <li><a href="logout.php" class="list"><span class="glyphicon glyphicon-log-out" ></span> Logout</a></li>   
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!--end navigation bar-->