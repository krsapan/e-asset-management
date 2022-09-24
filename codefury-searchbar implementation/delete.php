<?php

include 'conn.php';
extract($_POST);
extract($_GET);
$query="DELETE FROM asset WHERE 'asset_id'='$id'";
$res=mysql_query($conn,$query);
header('location:display.php');
if($res==true)
	{
		echo "Record deleted ";
	}
	else
	{
		echo "Failed";
	}


?>

