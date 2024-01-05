<?php
		include("header.php");
echo "<table border='2'>";
	include("connection.php");
	header("location:index.php");
	$f=$_GET['First'];
	$l=$_GET['Last'];
	$a=$_GET['Address'];
	$p=$_GET['Phon'];
	$e=$_GET['Email'];
	$s=$_GET['Sug'];
	$sql="insert into feedback values('$f','$l','$a','$p','$e','$s')";
	mysql_query($sql)or die("can't perform");
	
echo"</table>";	
    include("footer.php");
?>
