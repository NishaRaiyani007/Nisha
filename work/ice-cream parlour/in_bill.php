<?php
	
	include("connection.php");
	header("location:thanks.php");
	$bn=$_GET['bill_no'];
	$cn=$_GET['creditcard_no'];
	$nm=$_GET['name'];
	$co=$_GET['contact_no'];
	$ad=$_GET['address'];
	$ci=$_GET['city'];
	$t=$_GET['total_amount'];
	$sql="insert into bill values('$bn','$cn','$nm','$co','$ad','$ci','$t')";
	mysql_query($sql)or die("can't perform");
	header("location:thanks.php");

    ?>
