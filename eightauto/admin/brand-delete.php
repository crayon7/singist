<?php
	require_once("database/conn.php");
	$id=$_GET['brandid'];

	$query="DELETE FROM brand where brandid='$id'";
	mysql_query($query);
	header("location:brand-list.php");
?>