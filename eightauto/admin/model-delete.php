<?php
	require_once("database/conn.php");
	connect();

	$id=$_GET['id'];
	$query=mysql_query("DELETE FROM model WHERE id='$id'");
	header("location:index.php");

?>