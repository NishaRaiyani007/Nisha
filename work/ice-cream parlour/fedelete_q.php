<?php
include("connection.php");
header("location:feview.php");

include("header.php");
?>
<div id="page">
		<div id="content">
				
				<div class="post">

				<p class="meta"></p>
<div class="entry"><p><br>
<?php
$a=$_GET['t1'];
$s="delete from feedback where Address='$_GET[t1]'";
mysql_query($s)or die("can't delete");
?>
<br />
<br />


<?php include"footer.php"?>
