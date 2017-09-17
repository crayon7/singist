<?php
  session_start();
require_once('admin/database/conn.php');
if(isset($_REQUEST['btnsend']))
{
	connect();
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$subject=$_REQUEST['subject'];
	$message=$_REQUEST['message'];
	$query=mysql_query("insert into contact(name,email,phone,subject,message)values('$name','$email','$phone','$subject','$message')");
	if($query)
	{$msg="Send Successfully!";}
}
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
  <title>8auto | Contact</title>
</head>
<body class="contact-page">

<!-- header -->
<?php include("header.php"); ?>
<!-- end header -->
<!-- start page title -->

	<div class="container page-title">
      <div class="row">
       <div class="breadcrumb"> Contact </div>
      </div>
    </div>
  <!-- end page title -->

<!-- content -->
<div id="main-content">
<div class="container contact-address">
  <div class="row">
	<div class="col-sm-6">
	<div class="address contact">
		<img src="admin/images/contact-image/house.png">
		<p>No.8(A)Lower Kyeemyindaing Road, Kyeemyindaing Township, Yangon, Myanmar</p>
	</div>
	<div class="phone contact">
		<img src="admin/images/contact-image/call-512.png">
		<p>+950950011,+956677888</p>
	</div>
	<div class="email contact">
		<img src="admin/images/contact-image/mail.png">
		<p>info@8auto.com</p>
	</div>
	<div class="facebook contact">
		<img src="admin/images/contact-image/facebook1.png">
		<p>8auto</p>
	</div>
	<div class="website contact">
		<img src="admin/images/contact-image/web.png">
		www.eightauto.com
	</div>
	</div>
    <div class="col-sm-6 contact-car">
    	<img src="admin/images/contact-image/PNGPIX-COM-Mazda-Club-Sport-6-Car-PNG-Image.png"/>
	</div>
</div>
<div class="row">
	<div class="col-sm-12 msg">
	<?php
	if(!empty($msg))
	echo "<font color=red>".$msg."</font>";
	?>
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
	</div>
	<div class="col-sm-6 contact-title">
	<p>Want to me for a friendly chat and a cup of cofee? feel free to get in touch with us!</P>
	</div>
	<div class="col-sm-3">
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
	</div>
<!-- Start Form -->
<form id="form1" name="form1" method="post" action="#">
	<div class="col-sm-3">
	        <div class="form-group">
			<label for="name">Full Name</label>
			<input type="text" name="name" id="fullname" class="form-control" required>
			</div>
	</div>
	<div class="col-sm-3">
			<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" id="email" class="form-control" required>
			</div>
	</div>
	<div class="col-sm-3">
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
	</div>
	<div class="col-sm-3">
	        <div class="form-group">
			<label for="phone">Telephone</label>
			<input type="text" name="phone" id="telephone" class="form-control" required>
			</div>
	</div>
	<div class="col-sm-3">
			<div class="form-group">
			<label for="subject">Subject</label>
			<input type="text" name="subject" id="subject" class="form-control" required>
			</div>
	</div>
	<div class="col-sm-3">
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label for="message">Message</label>
			<textarea id="message" name="message" class="form-control" required></textarea>
			</div>
	</div>
	<div class="col-sm-3">
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
	</div>
	<div class="col-sm-3">
	</div>
	<div class="col-sm-3">
		<div class="form-group">
          <input type="submit" class="form-action regis" id="btnsend" name="btnsend" value="Send">
        </div>
		</form>
        <!-- End form -->

	</div>
	<div class="col-sm-3">
	</div>
</div>
</div>

</div>
<!-- end content -->

<!-- footer -->
<?php include("footer.php"); ?>
<!-- end footer -->

</body>
</html>
