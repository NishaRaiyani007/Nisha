<?php
		include("header.php");
		
echo "<table border='2'>";
	include("connection.php");
	header("location:feedback1.php");
	$f1=$_GET['FLav'];
	$d=$_GET['Dis'];
	$f=$_GET['First'];
	$s1=$_GET['Street1'];
	$l=$_GET['Last'];
	$s2=$_GET['Street2'];
	$c=$_GET['Cont'];
	$c1=$_GET['City'];
	$e=$_GET['Email'];
	$p1=$_GET['Pin'];
	$p2=$_GET['Phon'];
	$C=$_GET['Credit'];
	$C2=$_GET['Creditno'];
	$m=$_GET['Month'];
	$y=$_GET['Year'];
	$sql="insert into delivery values('$f1','$d','$f','$s1','$l','$s2','$c','$c1','$e','$p1','$p2','$C','$C2','$m','$y')";
	mysql_query($sql)or die("can't perform");
	
echo"</table>";	
    include("footer.php");
?>
