
   <!--Start header-->
  <div class="header">
    <div class="container">
      <div class="row">

        <div class="col-sm-3 logo">
          <div class="box">
            <a href="index.php"><img src="admin/images/8auto-logo.png" class="img-responsive"/></a>
          </div>
        </div>
        <div class="col-sm-6"> 
        </div>

        <div class="col-sm-3 user-info"> 
          <div class="login-complete">
            <span>
            <?php
              if(!empty($_SESSION['email'])){
                echo $_SESSION['name'];
            ?>
            </span>
            <a href="admin/logout.php"> Logout </a>
            <?php } ?>
          </div>

          <div class="empty-user">
          <?php if(empty($_SESSION['email'])) { ?>
            <a href="register.php"> Register </a>
            <a href="login.php"> Login </a>
          <?php } ?>
          </div>

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
            
            <li><a href="index.php" class="list">Home</a></li>
            <li><a href="aboutus.php" class="list">About Us</a></li>
            <li><a href="brand.php" class="list">Brand</a></li>
            <li><a href="service.php" class="list">Service</a></li>
            <li><a href="feedback.php" class="list">Feedback</a></li>
            <li><a href="contact.php" class="list">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!--end navigation bar-->
