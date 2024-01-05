<?php
header("location:flaview.php");
include("header.php");
?>
<div id="page">
		<div id="content">
				
				<div class="post">

				<p class="meta"></p>
<div class="entry"><p>
<?php
include("connection.php");
$a=$_GET['t1'];
$b=$_GET['t2'];
$c=$_GET['t3'];
$q="update img set $b='$c' where $b='$a'";
mysql_query($q)or die("can't update");
?>
<br />
<br />
<?php include "footer.php" ?>
