<?php
	require_once("database/conn.php");
	connect();
	$id=$_REQUEST['brandid'];
	$bname=$_REQUEST['bname'];
	$blogo=$_FILES['blogo']['name'];
	$tmp=$_FILES['blogo']['tmp_name'];

	if($blogo)
	{
		move_uploaded_file($tmp, "images/brandlogo/$blogo");
		$query="UPDATE brand SET name='$bname', logo='$blogo', modified_date=now() WHERE brandid='$id'";
	}
	else
	{
		$query="UPDATE brand SET name='$bname', modified_date=now() WHERE brandid='$id'";
	}
	mysql_query($query);
	header("location:brand-list.php");
?>