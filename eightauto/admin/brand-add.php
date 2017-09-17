<?php
	require_once("database/conn.php");
	connect();

	$bname=$_POST['bname'];
	$blogo=$_FILES['blogo']['name'];
	$tmp=$_FILES['blogo']['tmp_name'];

	if($blogo)
	{
		move_uploaded_file($tmp, "images/brandlogo/$blogo");
	}

	$query="INSERT INTO brand (name, logo, created_date, modified_date) values('$bname','$blogo', now(), now())";
	mysql_query($query);
	header("location:brand-list.php");
?>