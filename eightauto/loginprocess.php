<?php
	session_start();
	require_once("admin/database/conn.php");

	if(isset($_POST['btnlogin']))
	{
		connect();
		$email=$_REQUEST['email'];
		$pass=$_REQUEST['password'];

		$user=mysql_query("SELECT * FROM user where email='$email' and password='$pass' ");
		$usernum=mysql_num_rows($user);
		if($usernum>0)
		{
			while($userrow=mysql_fetch_array($user))
			{
				$_SESSION['uname']=$userrow['username'];
				echo "<script language=\"javascript\"> 
				window.location.href=\"admin/index.php\";</script>";
			}
		}

		$customer=mysql_query("SELECT * FROM customer where email='$email' and password='$pass' ");
		$custnum=mysql_num_rows($customer);
		if($custnum>0)
		{
			while($custrow=mysql_fetch_array($customer))
			{
//				unset($_SESSION['cart']);
				$_SESSION['name']=$custrow['name'];
				$_SESSION['email']=$custrow['email'];
				echo "<script language=\"javascript\"> 
				window.location.href=\"index.php\";</script>";
			}
		}
		else
		{
			echo "<script>alert(\"Email and Password is invalid, You try again!\");</script>";
			echo "<script language=\"javascript\">
			window.location.href=\"login.php\";</script>";
		}
	}
?>