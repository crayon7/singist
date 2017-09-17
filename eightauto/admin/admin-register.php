<?php
include("database/conn.php");
if(isset($_REQUEST['btnregister']))
{
	connect();
	$uname=$_REQUEST['username'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$cpassword=$_REQUEST['cpassword'];
	$usertype=$_REQUEST['usertype'];

	if($password==$cpassword)
	{
		$query=mysql_query("SELECT * FROM user WHERE email='$email' and password='$password'")or die ("Cann't select");
		$num=mysql_num_rows($query);
		if($num>0)
		{
			echo "<script>alert(\"This record is already exist!\");</script>";
			echo "<script language=\"javascript\">
			window.location.href=\"new-admin.php\";</script>";
		}
		else
		{
			$query=mysql_query("INSERT INTO user (username, email, password, usertype, created_date, modified_date) values
			('$uname','$email','$password','$usertype', now(), now())");

			header("location:new-admin.php");
		}
	}
	else
	{
			echo "<script>alert(\"Password Don't Match!\");</script>";
			echo "<script language=\"javascript\">
			window.location.href=\"new-admin.php\";</script>";
	}
}
?>