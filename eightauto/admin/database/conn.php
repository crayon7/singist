<?php
function connect()
{
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		die('Could not connect:'.mysql_error());
	}
	else
	{
		if(mysql_select_db("eightautodb",$con))
		{return $con;}
	}
}
?>