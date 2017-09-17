<?php
	require_once("database/conn.php");
	connect();

	$id=$_REQUEST['id'];
	$mname=$_REQUEST['mname'];
	$transmission=$_REQUEST['transmission'];
	$fueltype=$_REQUEST['fueltype'];
	$enginepower=$_REQUEST['enginepower'];
	$color=$_REQUEST['color'];
	$price=$_REQUEST['price'];
	$brandid=$_REQUEST['brandid'];
	$description=$_REQUEST['description'];
	$mphoto=$_FILES['mphoto']['name'];
	$tmp=$_FILES['mphoto']['tmp_name'];

	if($mphoto)
	{
		move_uploaded_file($tmp, "images/carphoto/$mphoto");
		$query="UPDATE model SET name='$mname', transmission='$transmission', fueltype='$fueltype', enginepower='$enginepower', color='$color', price='$price', brandid='$brandid', photo='$mphoto', description='$description', modified_date=now() WHERE id='$id'";
	}
	else
	{
		$query="UPDATE model SET name='$mname', transmission='$transmission', fueltype='$fueltype', enginepower='$enginepower', color='$color', price='$price', brandid='$brandid', description='$description', modified_date=now() WHERE id='$id'";
	}
	mysql_query($query);
	header("location:index.php");
?>