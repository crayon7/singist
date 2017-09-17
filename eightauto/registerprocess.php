<?php
require_once("admin/database/conn.php");

if(isset($_REQUEST['btnregister']))
{
	connect();
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$pass=$_REQUEST['password'];
	$cpass=$_REQUEST['cpassword'];
	$phone=$_REQUEST['phone'];
	$address=$_REQUEST['address'];

	if($pass==$cpass)
	{
		$query=mysql_query("SELECT * FROM customer WHERE email='$email' and password='$pass'")or die ("Cann't select");
		$num=mysql_num_rows($query);
		if($num>0)
		{
			echo "<script>alert(\"This record is already exist!\");</script>";
			echo "<script language=\"javascript\">
			window.location.href=\"register.php\";</script>";
		}
		else
		{
			$query=mysql_query("INSERT INTO customer (name, email, password, phone, address, created_date, modified_date) values
					('$name','$email','$pass','$phone', '$address', now(), now())");
			header("location:index.php");
		}
	}
	else
	{
			echo "<script>alert(\"Password Don't Match!\");</script>";
			echo "<script language=\"javascript\">
			window.location.href=\"register.php\";</script>";
	}
}
?>