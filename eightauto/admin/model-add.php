<?php
	require_once("database/adminauth.php");
	require_once("database/conn.php");
	connect();

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
	}

	$query="INSERT INTO model (name, transmission, fueltype, enginepower, color, price, photo, brandid, description, created_date, modified_date) values ('$mname', '$transmission', '$fueltype', '$enginepower', '$color', '$price', '$mphoto','$brandid', '$description', now(), now())";
	mysql_query($query);
	header("location:index.php");
?>